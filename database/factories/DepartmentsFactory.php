<?php

namespace Database\Factories;

use App\Models\Departments;
use App\Models\EmploymentAnnouncement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departments>
 */
class DepartmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Departments::class;
    
    public function definition(): array
    {
        
        $departments = [
                      'Human Resources',
                      'Sales',
                      'Procurement',
                      'Operations',
                      'projects',
                      'finance',
                      'Marketing',
                      'Programming',
                      'design'
                      ];

            $uniqueDepartment = $this->faker->randomElement($departments);
            while (Departments::where('title',$uniqueDepartment)->exists()){
                $uniqueDepartment = $this->faker->randomElement($departments);
            }
        return [
            'title'=> $uniqueDepartment,
            'descrption'=>$this->faker->text(),
        ];
    }
   
}
