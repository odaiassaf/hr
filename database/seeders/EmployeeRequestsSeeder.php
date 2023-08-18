<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeRequests;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeRequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeRequests::factory()->count(25)->create();
    }
}
