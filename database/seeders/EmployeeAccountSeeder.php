<?php

namespace Database\Seeders;

use App\Models\EmployeeAccount;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeAccount::factory()->count(5)->create();
    }
}
