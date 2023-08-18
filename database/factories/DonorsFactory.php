<?php

namespace Database\Factories;

use App\Models\Donors;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donors>
 */
class DonorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $donors = ['KSA','Kawit','jordan','Germany','Turkey'];
        $uniqueDonors = $this->faker->randomElement($donors);
        while (Donors::where('name',$uniqueDonors)->exists()){
            $uniqueDonors = $this->faker->randomElement($donors);
        }
        return [
            'name'=>$uniqueDonors,
        ];
    }
}
