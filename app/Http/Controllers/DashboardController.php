<?php

namespace App\Http\Controllers;

use App\Models\BoardingHouse;
use App\Models\Payment;
use App\Models\Room;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Boarding House stats
        $totalBoardingHouses = BoardingHouse::count();
        $totalRooms = Room::count();
        $totalTenants = Tenant::count();
        $totalPayments = Payment::sum('amount');

        $paymentsPerMonth = Payment::selectRaw('DATE_FORMAT(payment_date, "%b %Y") as month, SUM(amount) as total_amount')
            ->groupBy('month')
            ->orderByRaw('MIN(payment_date) ASC')
            ->get();

        $paymentMethodsData = Payment::select('payment_method', DB::raw('count(*) as total'))
            ->groupBy('payment_method')
            ->get();

        return view('dashboard', compact(
            'totalBoardingHouses',
            'totalRooms',
            'totalTenants',
            'totalPayments',
            'paymentsPerMonth',
            'paymentMethodsData' // Changed this variable
        ));
    }
}