<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Employees;
use App\Models\EmployeeRequests;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeRequests>
 */
class EmployeeRequestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EmployeeRequests::class;
    public function definition(): array
    {
        return [
        'title' => $this->faker->sentence,
        'type' => $this->faker->randomElement(['leave', 'time-off', 'schedule-change', 'overtime', 'training', 'equipment', 'travel', 'expense', 'promotion', 'assistance']),
        'request_date' => $this->faker->date(),
        'approved' => $this->faker->boolean,
        'description' => $this->faker->paragraph,
        'employee_id'=> Employees::factory(),  
        'user_id' => User::factory(),
        'created_at' => $this->faker->dateTime(),
        'updated_at' => $this->faker->dateTime(),
        ];
    }
}
