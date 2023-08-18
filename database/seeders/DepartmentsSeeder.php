<?php

namespace Database\Seeders;

use App\Models\Departments;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departments::factory()->count(8)->create();
        
    }
}
