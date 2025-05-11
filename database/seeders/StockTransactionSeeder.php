<?php

namespace Database\Seeders;

use App\Models\StockTransaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            // January
            [1, 'incoming', 5, '2025-01-01'],
            [2, 'incoming', 3, '2025-01-15'],
            [3, 'outgoing', 2, '2025-01-20'],
            // February
            [1, 'incoming', 7, '2025-02-01'],
            [4, 'outgoing', 5, '2025-02-05'],
            [2, 'incoming', 10, '2025-02-15'],
            [3, 'incoming', 10, '2025-02-16'],
            [2, 'incoming', 6, '2025-02-18'],
            // March
            [3, 'incoming', 4, '2025-03-01'],
            [1, 'outgoing', 3, '2025-03-10'],
            [5, 'incoming', 8, '2025-03-20'],
            [4, 'incoming', 9, '2025-03-30'],
            // April
            [2, 'incoming', 6, '2025-04-02'],
            [4, 'outgoing', 7, '2025-04-10'],
            [3, 'incoming', 9, '2025-04-15'],
            [4, 'outgoing', 7, '2025-04-10'],
            [3, 'incoming', 9, '2025-04-18'],

            // May
            [1, 'incoming', 5, '2025-05-01'],
            [2, 'incoming', 3, '2025-05-01'],
            [3, 'incoming', 7, '2025-05-02'],
            [4, 'incoming', 4, '2025-05-03'],
            [5, 'incoming', 2, '2025-05-03'],
            [6, 'incoming', 6, '2025-05-04'],
            [7, 'incoming', 10, '2025-05-04'],
            [8, 'incoming', 8, '2025-05-05'],
            [9, 'incoming', 1, '2025-05-05'],
            [10, 'incoming', 12, '2025-05-06'],
            // June
            [4, 'incoming', 7, '2025-06-01'],
            [3, 'outgoing', 5, '2025-06-10'],
            [6, 'incoming', 9, '2025-06-15'],
            // July
            [2, 'incoming', 4, '2025-07-02'],
            [1, 'outgoing', 6, '2025-07-10'],
            [5, 'incoming', 3, '2025-07-15'],
            // August
            [7, 'incoming', 8, '2025-08-01'],
            [8, 'outgoing', 2, '2025-08-05'],
            [9, 'incoming', 11, '2025-08-15'],
            // September
            [6, 'outgoing', 3, '2025-09-02'],
            [4, 'incoming', 5, '2025-09-10'],
            [2, 'incoming', 8, '2025-09-15'],
            // October
            [1, 'incoming', 6, '2025-10-01'],
            [3, 'outgoing', 4, '2025-10-05'],
            [5, 'incoming', 7, '2025-10-10'],
            [5, 'incoming', 6, '2025-10-11'],
            [2, 'incoming', 9, '2025-10-12'],
            [4, 'incoming', 8, '2025-10-13'],
            [5, 'incoming', 7, '2025-10-15'],
            // November
            [2, 'incoming', 9, '2025-11-01'],
            [4, 'outgoing', 6, '2025-11-05'],
            [3, 'incoming', 11, '2025-11-10'],
            // December
            [1, 'outgoing', 5, '2025-12-01'],
            [2, 'incoming', 8, '2025-12-05'],
            [3, 'outgoing', 7, '2025-12-10'],
            [2, 'incoming', 8, '2025-12-07'],
        ];

        foreach ($transactions as [$bagId, $type, $quantity, $date]) {
            StockTransaction::create([
                'bag_id' => $bagId,
                'type' => $type,
                'quantity' => $quantity,
                'transaction_date' => $date
            ]);
        }
    }
}
