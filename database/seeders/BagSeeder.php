<?php

namespace Database\Seeders;

use App\Models\Bag;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BagSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch categories and brands collections
        $categories = Category::all();
        $brands = Brand::all();

        // Check if categories and brands exist to prevent errors
        if ($categories->isEmpty() || $brands->isEmpty()) {
            $this->command->info('Categories or Brands are empty. Please seed them first.');
            return;
        }

        // Create sample bags with random category and brand IDs, and set stockQuantity
        Bag::create([
            'name' => 'Neverfull MM',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 100, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'GG Marmont Matelassé',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 50, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Voyager Tote',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 75, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Court Backpack',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 60, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Galleria Saffiano',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 80, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Le Pliage Large',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 120, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Little America',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 90, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Chain Strap Shoulder',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 40, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Belt Bag',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 60, // Adjust the stock quantity
        ]);

        Bag::create([
            'name' => 'Regular Backpack',
            'category_id' => $categories->random()->id,
            'brand_id' => $brands->random()->id,
            'stockQuantity' => 70, // Adjust the stock quantity
        ]);
    }
}
