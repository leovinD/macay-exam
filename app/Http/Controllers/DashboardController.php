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

        // 📊 Stock transactions per month
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // Query the stock transactions by month
        $stockTransactionsRaw = StockTransaction::selectRaw('DATE_FORMAT(transaction_date, "%b") as month, COUNT(*) as total')
            ->groupBy('month')
            ->get()
            ->pluck('total', 'month')
            ->toArray();

        // Initialize the stock transactions array with zero values for each month
        $stockTransactionsPerMonth = [];
        foreach ($months as $month) {
            $stockTransactionsPerMonth[] = $stockTransactionsRaw[$month] ?? 0;
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
            'stockTransactionsPerMonth',
            'bagsPerCategoryData',
            'months'
        ));
    }
}
