<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'slug' => fake()->unique()->slug(),
            'summary' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'highlights' => [fake()->word(), fake()->word(), fake()->word()],
            'stack' => [fake()->word(), fake()->word()],
            'github_url' => null,
            'live_url' => null,
            'image' => null,
            'order' => fake()->unique()->numberBetween(1, 100),
            'is_visible' => true,
        ];
    }

    public function hidden(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_visible' => false,
        ]);
    }
}
