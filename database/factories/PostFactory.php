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
    public function definition()
    {
        return [
            'title' => fake()->sentence(5),
            'slug' => fake()->slug(3),
            'category_id' => fake()->numberBetween(1, 4),
            'user_id' => fake()->numberBetween(1, 5),
            'excerpt' => fake()->paragraph(5),
            'body' => collect(fake()->paragraphs(mt_rand(5, 9)))->map(fn($p) => "<p>$p</p>")->implode(''),
        ];
    }
}
