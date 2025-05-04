<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rooms')->insert([
            ['boarding_house_id' => 1, 'room_number' => '101', 'room_type' => 'Single', 'monthly_rent' => 4000],
            ['boarding_house_id' => 1, 'room_number' => '102', 'room_type' => 'Double', 'monthly_rent' => 6000],
            ['boarding_house_id' => 2, 'room_number' => '201', 'room_type' => 'Single', 'monthly_rent' => 4500],
            ['boarding_house_id' => 3, 'room_number' => '301', 'room_type' => 'Single', 'monthly_rent' => 5000],
            ['boarding_house_id' => 4, 'room_number' => '401', 'room_type' => 'Double', 'monthly_rent' => 6500],
            ['boarding_house_id' => 5, 'room_number' => '501', 'room_type' => 'Single', 'monthly_rent' => 4000],
            ['boarding_house_id' => 6, 'room_number' => '601', 'room_type' => 'Single', 'monthly_rent' => 4200],
            ['boarding_house_id' => 7, 'room_number' => '701', 'room_type' => 'Double', 'monthly_rent' => 6300],
            ['boarding_house_id' => 8, 'room_number' => '801', 'room_type' => 'Single', 'monthly_rent' => 4100],
            ['boarding_house_id' => 9, 'room_number' => '901', 'room_type' => 'Single', 'monthly_rent' => 4300],
        ]);
    }
}
