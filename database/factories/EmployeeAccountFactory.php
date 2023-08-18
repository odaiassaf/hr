<?php

namespace Database\Factories;
use App\Models\Employees;
use App\Models\EmployeeAccount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeAccount>
 */
class EmployeeAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EmployeeAccount::class;
    public function definition(): array
    {
        
        return [
        'employee_id' => function () {
            return Employees::factory()->create()->id;
        },
        'pay_date' => $this->faker->date(),
        'in' => $this->faker->randomFloat(2, 0, 100),
        'out' => $this->faker->randomFloat(2, 0, 100),
        'title' => $this->faker->word,
        'type' => $this->faker->randomElement(['Type A', 'Type B', 'Type C']),
        'description' => $this->faker->paragraph,
        'attachment' => $this->faker->imageUrl(),
        'created_at' => $this->faker->dateTime(),
        'updated_at' => $this->faker->dateTime(),
    ];
    }
}
