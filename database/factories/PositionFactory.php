<?php

namespace Database\Factories;

use App\Models\Donors;
use App\Models\Position;
use Database\Factories\PositionFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = [
    'CEO',
    'CTO',
    'CFO',
    'COO',
    'HR Manager',
    'Sales Manager',
    'Marketing Specialist',
    'Software Engineer',
    'Accountant',
    'Project Manager',
];
 $uniqueElement = $this->faker->randomElement($positions);
  while (Position::where('title', $uniqueElement)->exists()) {
        $uniqueElement = $this->faker->randomElement($positions);
    }

        return [
            'title' => $uniqueElement,
            'description' => $this->faker->sentence,
            
        ];
    }
}
