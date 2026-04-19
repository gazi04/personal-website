<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->unique()->slug(),
            'summary' => fake()->sentence(),
            'body' => fake()->paragraphs(3, true),
            'read_time' => fake()->numberBetween(1, 20),
            'cover_image' => null,
            'is_visible' => true,
            'published_at' => now(),
        ];
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_visible' => true,
            'published_at' => now(),
        ]);
    }

    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_visible' => false,
            'published_at' => null,
        ]);
    }
}
