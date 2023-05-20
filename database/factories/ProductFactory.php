<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'details' => fake()->sentence(),
            'category_id' => fake()->numberBetween(5,10), //! Here I use 5 to 10; because I have categories (2,3,5) and these is primary key in its own table -categories table-, and foreign in this table
            'price' => fake()->numberBetween(17.99, 99.99),
            'image' => 'https://placehold.jp/200x250.png',
        ];
    }
}
