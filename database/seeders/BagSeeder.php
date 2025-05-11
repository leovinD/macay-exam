<?php

namespace Database\Seeders;

use App\Models\Bag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bags = [
            ['Neverfull MM', 1, 1, 99999],
            ['GG Marmont Matelassé', 2, 2, 89999],
            ['Voyager Tote', 3, 3, 22999],
            ['Court Backpack', 4, 4, 17999],
            ['Galleria Saffiano', 5, 1, 139999],
            ['Le Pliage Large', 6, 3, 10999],
            ['Little America', 7, 4, 7999],
            ['Chain Strap Shoulder', 8, 2, 4599],
            ['Belt Bag', 9, 1, 154999],
            ['Regular Backpack', 10, 4, 3999],
        ];

        foreach ($bags as [$name, $brandId, $categoryId, $price]) {
            Bag::create([
                'name' => $name,
                'brand_id' => $brandId,
                'category_id' => $categoryId,
                'price' => $price
            ]);
        }
    }
}
