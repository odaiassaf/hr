<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Employees;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use App\Models\EmployeeEvaluation;
use Database\Seeders\DonorsSeeder;
use Database\Seeders\ProjectsSeeder;
use Database\Seeders\EmployeesSeeder;
use Database\Seeders\DepartmentsSeeder;
use Database\Seeders\PermissionsSeeder;
use Spatie\Permission\Models\Permission;
use Database\Seeders\EmployeeAccountSeeder;
use Database\Seeders\EmployeeRequestsSeeder;
use Database\Seeders\EmployeeEvaluationSeeder;
use Database\Seeders\EmploymentAnnouncementSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

  
       $this->call(PermissionsSeeder::class);
        $this->call(DepartmentsSeeder::class);
    
        // Departments::factory()->count(10)->create();
        $this->call(PositionSeeder::class);
        $this->call(EmploymentAnnouncementSeeder::class);
        User::factory()->create()->each(function ($user) {
         $user->employee()->save(Employees::factory()->make());
          $user->evaluation()->save(EmployeeEvaluation::factory()->make());
        });
        $this->call(UserSeeder::class);
        $this->call(EmployeesSeeder::class);
        // $this->call(EmployeeCommentsSeeder::class);
        // $this->call(EmployeeDocumentsSeeder::class);
        $this->call(EmployeeEvaluationSeeder::class);
        $this->call(EmployeeAccountSeeder::class);
        $this->call(DonorsSeeder::class);
        $this->call(EmployeeRequestsSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(EmployeeTasksSeeder::class);
        // $this->call(EmployeeExperiencesSeeder::class);
        // $this->call(EmployeeLanguagesSeeder::class);
        // $this->call(EmployeeSkillsSeeder::class);
        // $this->call(EmployeeStudiesSeeder::class);
        // \App\Models\User::factory(10)->create();
            //   Permission::factory()->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
