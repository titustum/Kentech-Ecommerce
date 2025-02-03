<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Smartphones',
            'slug' => 'smartphones',
            'cover_image' => 'images/smartphones.jpg',
            'product_count' => 50,
        ]);

        Category::create([
            'name' => 'Laptops',
            'slug' => 'laptops',
            'cover_image' => 'images/laptops.jpg',
            'product_count' => 30,
        ]);

        Category::create([
            'name' => 'Cameras',
            'slug' => 'cameras',
            'cover_image' => 'images/cameras.jpg',
            'product_count' => 20,
        ]);

        // Add more categories as needed
    }
}
