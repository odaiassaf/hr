<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employees;
use App\Models\EmployeeSkills;
use App\Models\EmployeeStudies;
use Illuminate\Database\Seeder;
use App\Models\EmployeeComments;
use App\Models\EmployeeDocuments;
use App\Models\EmployeeLanguages;
use App\Models\EmployeeEvaluation;
use App\Models\EmployeeExperiences;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeEvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $employees = Employees::all();
         $users = User::all();
        $cont = rand(1,20);
        foreach($employees as $employee){
              EmployeeEvaluation::factory()->count($cont)->create();
              EmployeeComments::factory()->count($cont)->create();
              EmployeeDocuments::factory()->count($cont)->create();
              EmployeeExperiences::factory()->count($cont)->create();
              EmployeeLanguages::factory()->count($cont)->create();
              EmployeeSkills::factory()->count($cont)->create();
              EmployeeStudies::factory()->count($cont)->create();
        }
        // foreach($users as $user){
        //       EmployeeEvaluation::factory()->count($cont)->create();
        // }
    }
    
}
