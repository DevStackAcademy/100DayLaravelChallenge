<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'slug' => strtolower(
                str_replace(' ', '-', $title)
            ),
            'body' => fake()->text(),
            // 'type' => ['PAGE', 'POST'], lo asignaremos desde el seed
        ];
    }
}
