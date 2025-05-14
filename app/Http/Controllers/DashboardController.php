<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Brand;
use App\Models\Category;
use App\Models\StockTransaction;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // 📦 Basic counts
        $totalBrands = Brand::count();
        $totalCategories = Category::count();
        $totalBags = Bag::count();
        $totalStockTransactions = StockTransaction::count();

        // 📊 Stock transactions per month by type
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        $incomingRaw = StockTransaction::selectRaw('DATE_FORMAT(transaction_date, "%b") as month, COUNT(*) as total')
            ->where('type', 'incoming')
            ->groupBy('month')
            ->get()
            ->pluck('total', 'month')
            ->toArray();

        $outgoingRaw = StockTransaction::selectRaw('DATE_FORMAT(transaction_date, "%b") as month, COUNT(*) as total')
            ->where('type', 'outgoing')
            ->groupBy('month')
            ->get()
            ->pluck('total', 'month')
            ->toArray();

        $incomingPerMonth = [];
        $outgoingPerMonth = [];

        foreach ($months as $month) {
            $incomingPerMonth[] = $incomingRaw[$month] ?? 0;
            $outgoingPerMonth[] = $outgoingRaw[$month] ?? 0;
        }

        // 🥧 Bags per category (count)
        $bagsPerCategoryData = Category::select('categories.name as category_name', DB::raw('COUNT(bags.id) as total'))
            ->leftJoin('bags', 'categories.id', '=', 'bags.category_id')
            ->groupBy('categories.name')
            ->orderBy('categories.name')
            ->get();

        // 👜 Bags per brand (count)
        $bagsPerBrandData = Brand::select('brands.name as brand_name', DB::raw('COUNT(bags.id) as total'))
            ->leftJoin('bags', 'brands.id', '=', 'bags.brand_id')
            ->groupBy('brands.name')
            ->orderBy('brands.name')
            ->get();

        // 📦 Stock quantity per brand (THIS is what you need for your new doughnut chart)
        $stockPerBrand = Brand::select('brands.name as brand_name', DB::raw('SUM(bags.stockQuantity) as total_stock'))
            ->leftJoin('bags', 'brands.id', '=', 'bags.brand_id')
            ->groupBy('brands.name')
            ->orderBy('brands.name')
            ->get();

        // 📋 Bags grouped by category and brand (if needed)
        $bagsGroupedByCategory = Bag::select('category_id', 'brand_id', DB::raw('SUM(stockQuantity) as total_quantity'))
            ->with(['category', 'brand'])
            ->groupBy('category_id', 'brand_id')
            ->get();

        // 📦 All bags list (if needed)
        $bagsList = Bag::all();

        // Return to view
        return view('dashboard', compact(
            'totalBrands',
            'totalCategories',
            'totalBags',
            'totalStockTransactions',
            'months',
            'incomingPerMonth',
            'outgoingPerMonth',
            'bagsPerCategoryData',
            'bagsPerBrandData',
            'stockPerBrand', // 👈 pass this to your view
            'bagsGroupedByCategory',
            'bagsList'
        ));
    }
}
