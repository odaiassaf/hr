<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeLanguages>
 */
class EmployeeLanguagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'language' => $this->faker->languageCode,
            'employee_id'=> Employees::factory(),
            'read' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'writing' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'speak' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'attachment' => null,
        ];
    }
}
