<?php

namespace Database\Seeders;

use App\Models\EmployeeTasks;
use Illuminate\Database\Seeder;


class EmployeeTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeTasks::factory()->count(25)->create();
    }
}
