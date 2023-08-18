<?php

namespace Database\Seeders;

use App\Models\Employees;
use App\Models\Departments;
use Illuminate\Database\Seeder;
use App\Models\EmploymentAnnouncement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmploymentAnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = Departments::all();
       
        foreach ($departments as $department){
            $employmentAnnouncementCount = rand(1,2);
            EmploymentAnnouncement::factory()->count($employmentAnnouncementCount)->create([
                 'department_id'=>$department->id,
            ]);
        }

        // EmploymentAnnouncement::factory()->count(20)->create();
    }
}
