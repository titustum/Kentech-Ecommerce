<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        // Get a random category (e.g. Smartphones, Laptops, etc.)
        $category = Category::inRandomOrder()->first();

        return [
            'category_id' => $category->id,
            'name' => $this->faker->word . ' ' . $this->faker->word, // Random product name
            'image' => $this->faker->imageUrl(640, 480, 'electronics', true, 'product'), // Random image
            'price' => $this->faker->randomFloat(2, 100, 5000), // Random price between 100 and 5000
            'discount' => $this->faker->numberBetween(0, 50), // Random discount between 0% and 50%
            'description' => $this->faker->paragraph, // Random product description
            'specifications' => $this->faker->sentence, // Random product specifications
        ];
    }
}
