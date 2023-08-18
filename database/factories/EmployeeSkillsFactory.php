<?php

namespace Database\Factories;

use App\Models\Employees;
use App\Models\EmployeesFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeSkills>
 */
class EmployeeSkillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'catgory' => $this->faker->word,
            'name' => $this->faker->word,
            'lavel' => $this->faker->numberBetween(1, 5),
            'descrption' => $this->faker->text,
            'employee_id'=> Employees::factory(),
        ];
    }
}
