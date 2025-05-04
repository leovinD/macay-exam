<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantSeeder extends Seeder
{
    public function run(): void
    {
        // Insert tenants with room_id and boarding_house_id
        DB::table('tenants')->insert([
            ['room_id' => 1, 'boarding_house_id' => 1, 'name' => 'Juan Dela Cruz', 'contact_number' => '09180000001', 'move_in_date' => '2024-06-01'],
            ['room_id' => 2, 'boarding_house_id' => 1, 'name' => 'Maria Santos', 'contact_number' => '09180000002', 'move_in_date' => '2024-06-05'],
            ['room_id' => 3, 'boarding_house_id' => 1, 'name' => 'Pedro Gomez', 'contact_number' => '09180000003', 'move_in_date' => '2024-06-10'],
            ['room_id' => 4, 'boarding_house_id' => 1, 'name' => 'Ana Dizon', 'contact_number' => '09180000004', 'move_in_date' => '2024-06-15'],
            ['room_id' => 5, 'boarding_house_id' => 2, 'name' => 'Carlos Lim', 'contact_number' => '09180000005', 'move_in_date' => '2024-06-20'],
            ['room_id' => 6, 'boarding_house_id' => 2, 'name' => 'Maya Tan', 'contact_number' => '09180000006', 'move_in_date' => '2024-06-25'],
            ['room_id' => 7, 'boarding_house_id' => 2, 'name' => 'Ricky Sy', 'contact_number' => '09180000007', 'move_in_date' => '2024-06-30'],
            ['room_id' => 8, 'boarding_house_id' => 3, 'name' => 'Joy Co', 'contact_number' => '09180000008', 'move_in_date' => '2024-07-01'],
            ['room_id' => 9, 'boarding_house_id' => 3, 'name' => 'Albert De Leon', 'contact_number' => '09180000009', 'move_in_date' => '2024-07-05'],
            ['room_id' => 10, 'boarding_house_id' => 3, 'name' => 'Liza Santos', 'contact_number' => '09180000010', 'move_in_date' => '2024-07-10'],
        ]);
    }
}
