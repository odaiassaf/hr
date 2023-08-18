<?php

namespace Database\Factories;

use App\Models\Employees;
use Database\Factories\UserFactory;
use Database\Factories\EmployeesFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeComments>
 */
class EmployeeCommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_by' =>$this->faker->numberBetween(1,2),
            'comment'=>$this->faker->text(),
            'employee_id'=> Employees::factory(),
            // 'upper_comment'=>'10',
           
            // 'upper_comment'=>function(){
            //     return EmployeeCommentsFactory::factory()->create()->id;
            // }
        ];
    }
}
