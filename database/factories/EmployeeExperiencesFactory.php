<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeExperiences>
 */
class EmployeeExperiencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'position' => $this->faker->jobTitle,
            'organization' => $this->faker->company,
            'contract_type' => $this->faker->randomElement(['Full-Time', 'Part-Time', 'Contract','Freelance']),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'leave_reason' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'employee_id'=> Employees::factory(),
        ];
    }
}
