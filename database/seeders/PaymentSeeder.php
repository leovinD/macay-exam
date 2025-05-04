<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('payments')->insert([
            ['tenant_id' => 1, 'payment_date' => '2024-01-02', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'January rent'],
            ['tenant_id' => 2, 'payment_date' => '2024-01-07', 'amount' => 6000, 'payment_method' => 'GCash', 'remarks' => 'January rent'],
            ['tenant_id' => 3, 'payment_date' => '2024-01-12', 'amount' => 4500, 'payment_method' => 'Bank Transfer', 'remarks' => 'January rent'],
            ['tenant_id' => 4, 'payment_date' => '2024-01-18', 'amount' => 5000, 'payment_method' => 'Credit Card', 'remarks' => 'January rent'],
            ['tenant_id' => 5, 'payment_date' => '2024-01-23', 'amount' => 6500, 'payment_method' => 'PayMaya', 'remarks' => 'January rent'],
            ['tenant_id' => 6, 'payment_date' => '2024-02-03', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'February rent'],
            ['tenant_id' => 7, 'payment_date' => '2024-02-08', 'amount' => 4200, 'payment_method' => 'GCash', 'remarks' => 'February rent'],
            ['tenant_id' => 8, 'payment_date' => '2024-02-14', 'amount' => 6300, 'payment_method' => 'Bank Transfer', 'remarks' => 'February rent'],
            ['tenant_id' => 9, 'payment_date' => '2024-02-19', 'amount' => 4100, 'payment_method' => 'Credit Card', 'remarks' => 'February rent'],
            ['tenant_id' => 10, 'payment_date' => '2024-02-24', 'amount' => 4300, 'payment_method' => 'PayMaya', 'remarks' => 'February rent'],
            ['tenant_id' => 1, 'payment_date' => '2024-03-01', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'March rent'],
            ['tenant_id' => 2, 'payment_date' => '2024-03-06', 'amount' => 6000, 'payment_method' => 'GCash', 'remarks' => 'March rent'],
            ['tenant_id' => 3, 'payment_date' => '2024-03-11', 'amount' => 4500, 'payment_method' => 'Bank Transfer', 'remarks' => 'March rent'],
            ['tenant_id' => 4, 'payment_date' => '2024-03-16', 'amount' => 5000, 'payment_method' => 'Credit Card', 'remarks' => 'March rent'],
            ['tenant_id' => 5, 'payment_date' => '2024-03-21', 'amount' => 6500, 'payment_method' => 'PayMaya', 'remarks' => 'March rent'],
            ['tenant_id' => 6, 'payment_date' => '2024-04-02', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'April rent'],
            ['tenant_id' => 7, 'payment_date' => '2024-04-07', 'amount' => 4200, 'payment_method' => 'GCash', 'remarks' => 'April rent'],
            ['tenant_id' => 8, 'payment_date' => '2024-04-12', 'amount' => 6300, 'payment_method' => 'Bank Transfer', 'remarks' => 'April rent'],
            ['tenant_id' => 9, 'payment_date' => '2024-04-17', 'amount' => 4100, 'payment_method' => 'Credit Card', 'remarks' => 'April rent'],
            ['tenant_id' => 10, 'payment_date' => '2024-04-22', 'amount' => 4300, 'payment_method' => 'PayMaya', 'remarks' => 'April rent'],
            ['tenant_id' => 1, 'payment_date' => '2024-05-04', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'May rent'],
            ['tenant_id' => 2, 'payment_date' => '2024-05-09', 'amount' => 6000, 'payment_method' => 'GCash', 'remarks' => 'May rent'],
            ['tenant_id' => 3, 'payment_date' => '2024-05-14', 'amount' => 4500, 'payment_method' => 'Bank Transfer', 'remarks' => 'May rent'],
            ['tenant_id' => 4, 'payment_date' => '2024-05-19', 'amount' => 5000, 'payment_method' => 'Credit Card', 'remarks' => 'May rent'],
            ['tenant_id' => 5, 'payment_date' => '2024-05-24', 'amount' => 6500, 'payment_method' => 'PayMaya', 'remarks' => 'May rent'],
            ['tenant_id' => 6, 'payment_date' => '2024-06-01', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'June rent'],
            ['tenant_id' => 7, 'payment_date' => '2024-06-05', 'amount' => 4200, 'payment_method' => 'GCash', 'remarks' => 'June rent'],
            ['tenant_id' => 8, 'payment_date' => '2024-06-10', 'amount' => 6300, 'payment_method' => 'Bank Transfer', 'remarks' => 'June rent'],
            ['tenant_id' => 9, 'payment_date' => '2024-06-15', 'amount' => 4100, 'payment_method' => 'Credit Card', 'remarks' => 'June rent'],
            ['tenant_id' => 10, 'payment_date' => '2024-06-20', 'amount' => 4300, 'payment_method' => 'PayMaya', 'remarks' => 'June rent'],
            ['tenant_id' => 1, 'payment_date' => '2024-07-03', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'July rent'],
            ['tenant_id' => 2, 'payment_date' => '2024-07-08', 'amount' => 6000, 'payment_method' => 'GCash', 'remarks' => 'July rent'],
            ['tenant_id' => 3, 'payment_date' => '2024-07-13', 'amount' => 4500, 'payment_method' => 'Bank Transfer', 'remarks' => 'July rent'],
            ['tenant_id' => 4, 'payment_date' => '2024-07-18', 'amount' => 5000, 'payment_method' => 'Credit Card', 'remarks' => 'July rent'],
            ['tenant_id' => 5, 'payment_date' => '2024-07-23', 'amount' => 6500, 'payment_method' => 'PayMaya', 'remarks' => 'July rent'],
            ['tenant_id' => 6, 'payment_date' => '2024-08-05', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'August rent'],
            ['tenant_id' => 7, 'payment_date' => '2024-08-10', 'amount' => 4200, 'payment_method' => 'GCash', 'remarks' => 'August rent'],
            ['tenant_id' => 8, 'payment_date' => '2024-08-15', 'amount' => 6300, 'payment_method' => 'Bank Transfer', 'remarks' => 'August rent'],
            ['tenant_id' => 9, 'payment_date' => '2024-08-20', 'amount' => 4100, 'payment_method' => 'Credit Card', 'remarks' => 'August rent'],
            ['tenant_id' => 10, 'payment_date' => '2024-08-25', 'amount' => 4300, 'payment_method' => 'PayMaya', 'remarks' => 'August rent'],
            ['tenant_id' => 1, 'payment_date' => '2024-09-02', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'September rent'],
            ['tenant_id' => 2, 'payment_date' => '2024-09-07', 'amount' => 6000, 'payment_method' => 'GCash', 'remarks' => 'September rent'],
            ['tenant_id' => 3, 'payment_date' => '2024-09-12', 'amount' => 4500, 'payment_method' => 'Bank Transfer', 'remarks' => 'September rent'],
            ['tenant_id' => 4, 'payment_date' => '2024-09-17', 'amount' => 5000, 'payment_method' => 'Credit Card', 'remarks' => 'September rent'],
            ['tenant_id' => 5, 'payment_date' => '2024-09-22', 'amount' => 6500, 'payment_method' => 'PayMaya', 'remarks' => 'September rent'],
            ['tenant_id' => 6, 'payment_date' => '2024-10-04', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'October rent'],
            ['tenant_id' => 7, 'payment_date' => '2024-10-09', 'amount' => 4200, 'payment_method' => 'GCash', 'remarks' => 'October rent'],
            ['tenant_id' => 8, 'payment_date' => '2024-10-14', 'amount' => 6300, 'payment_method' => 'Bank Transfer', 'remarks' => 'October rent'],
            ['tenant_id' => 9, 'payment_date' => '2024-10-19', 'amount' => 4100, 'payment_method' => 'Credit Card', 'remarks' => 'October rent'],
            ['tenant_id' => 10, 'payment_date' => '2024-10-24', 'amount' => 4300, 'payment_method' => 'PayMaya', 'remarks' => 'October rent'],
            ['tenant_id' => 1, 'payment_date' => '2024-11-01', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'November rent'],
            ['tenant_id' => 2, 'payment_date' => '2024-11-06', 'amount' => 6000, 'payment_method' => 'GCash', 'remarks' => 'November rent'],
            ['tenant_id' => 3, 'payment_date' => '2024-11-11', 'amount' => 4500, 'payment_method' => 'Bank Transfer', 'remarks' => 'November rent'],
            ['tenant_id' => 4, 'payment_date' => '2024-11-16', 'amount' => 5000, 'payment_method' => 'Credit Card', 'remarks' => 'November rent'],
            ['tenant_id' => 5, 'payment_date' => '2024-11-21', 'amount' => 6500, 'payment_method' => 'PayMaya', 'remarks' => 'November rent'],
            ['tenant_id' => 6, 'payment_date' => '2024-12-03', 'amount' => 4000, 'payment_method' => 'Cash', 'remarks' => 'December rent'],
            ['tenant_id' => 7, 'payment_date' => '2024-12-08', 'amount' => 4200, 'payment_method' => 'GCash', 'remarks' => 'December rent'],
            ['tenant_id' => 8, 'payment_date' => '2024-12-13', 'amount' => 6300, 'payment_method' => 'Bank Transfer', 'remarks' => 'December rent'],
            ['tenant_id' => 9, 'payment_date' => '2024-12-18', 'amount' => 4100, 'payment_method' => 'Credit Card', 'remarks' => 'December rent'],
            ['tenant_id' => 10, 'payment_date' => '2024-12-23', 'amount' => 4300, 'payment_method' => 'PayMaya', 'remarks' => 'December rent'],
        ]);
    }
}
