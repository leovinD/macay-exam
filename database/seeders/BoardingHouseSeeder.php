<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardingHouseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('boarding_houses')->insert([
            ['name' => 'Cozy Stay Boarding', 'address' => 'Rizal St, Manila', 'owner_name' => 'Ana Reyes', 'contact_number' => '09171234567'],
            ['name' => 'Home Away Boarding', 'address' => 'Taft Ave, Manila', 'owner_name' => 'Mark Cruz', 'contact_number' => '09181234567'],
            ['name' => 'Sunset Dormitory', 'address' => 'P. Noval St, Manila', 'owner_name' => 'Liza Tan', 'contact_number' => '09191234567'],
            ['name' => 'Skyline Stay', 'address' => 'Espana Blvd, Manila', 'owner_name' => 'Paul Gomez', 'contact_number' => '09201234567'],
            ['name' => 'Urban Nest', 'address' => 'Recto Ave, Manila', 'owner_name' => 'Maya Santos', 'contact_number' => '09211234567'],
            ['name' => 'Bayview Pads', 'address' => 'Roxas Blvd, Manila', 'owner_name' => 'Carlos Diaz', 'contact_number' => '09221234567'],
            ['name' => 'City Central', 'address' => 'Morayta St, Manila', 'owner_name' => 'Jenny Sy', 'contact_number' => '09231234567'],
            ['name' => 'Peak Boarding', 'address' => 'U.N. Ave, Manila', 'owner_name' => 'Albert Lim', 'contact_number' => '09241234567'],
            ['name' => 'Sunrise Dorm', 'address' => 'Padre Faura St, Manila', 'owner_name' => 'Joy De Leon', 'contact_number' => '09251234567'],
            ['name' => 'The Haven', 'address' => 'San Marcelino St, Manila', 'owner_name' => 'Gina Co', 'contact_number' => '09261234567'],
        ]);
    }
}

