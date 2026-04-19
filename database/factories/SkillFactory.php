<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->randomElement(['Languages', 'Frameworks', 'Databases', 'Tools', 'Cloud']),
            'items' => [fake()->word(), fake()->word(), fake()->word()],
            'order' => fake()->unique()->numberBetween(1, 100),
        ];
    }
}
