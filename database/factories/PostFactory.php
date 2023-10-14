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
        return [
            'image' => fake()->image('public/storage/posts', 640, 480, null, false),
            'title' => fake()->words(rand(3, 9), true),
            'content' => fake()->paragraph(5)
        ];
    }
}
