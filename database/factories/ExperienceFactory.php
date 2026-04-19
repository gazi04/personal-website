<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->company(),
            'role' => fake()->jobTitle(),
            'period_start' => fake()->date('Y-m-d', '-1 year'),
            'period_end' => null,
            'description' => fake()->paragraph(),
            'tags' => [fake()->word(), fake()->word()],
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
