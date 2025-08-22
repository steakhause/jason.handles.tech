<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;


// This seeder creates 5 product categories and 50 products, assigning each product to a random category.
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 categories
        $categories = ProductCategory::factory(5)->create();

        // Create 50 products and randomly assign them to one of the categories
        Product::factory(50)->make()->each(function ($product) use ($categories) {
            $product->category_id = $categories->random()->id;
            $product->save();
        });
    }
}