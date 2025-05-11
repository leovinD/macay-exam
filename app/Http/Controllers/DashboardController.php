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
        // 📦 Bag and brand stats
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

        // 🥧 Bags per category
        $bagsPerCategoryData = Category::select('categories.name as category_name', DB::raw('COUNT(bags.id) as total'))
            ->leftJoin('bags', 'categories.id', '=', 'bags.category_id')
            ->groupBy('categories.name')
            ->orderBy('categories.name')
            ->get();

        // Return to view
        return view('dashboard', compact(
            'totalBrands',
            'totalCategories',
            'totalBags',
            'totalStockTransactions',
            'months',
            'incomingPerMonth',
            'outgoingPerMonth',
            'bagsPerCategoryData'
        ));
    }
}
