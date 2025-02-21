<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true), 
            'price' => $this->faker->randomFloat(2, 10, 500), 
            'description' => $this->faker->paragraph(2), 
            'image' => $this->faker->imageUrl(), 
            'category_id' => Category::factory(), 
        ];
    }
}
