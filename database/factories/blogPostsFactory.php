<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\blogPosts>
 */
class blogPostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->title(),
            'intro' => fake()->title(),
            'body' => fake()->paragraphs(5),
            'user_id' => User::factory(),
            'categories_id' => Categories::factory(),
        ];
    }
}

