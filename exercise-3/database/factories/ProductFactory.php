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
            'name' => fake()->sentence(2),
            'excerpt' => fake()->text(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 10, 100),
            'stock' => fake()->numberBetween(0, 100),
        ];
    }
}
