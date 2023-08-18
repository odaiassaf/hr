<?php

namespace Database\Factories;

use App\Models\Donors;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title'=> $this->faker->sentence,
        'description' =>$this->faker->text,
        'donor_id' => $this->faker->numberBetween(1, 4),
        'start_date'=>$this->faker->date(),
        'end_date'=>$this->faker->date(),
        'created_at' => $this->faker->dateTime(),
        'updated_at' => $this->faker->dateTime(),
        ];
    }
}
