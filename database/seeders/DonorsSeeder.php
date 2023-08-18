<?php

namespace Database\Seeders;

use App\Models\Donors;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DonorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donors::factory()->count(4)->create();
    }
}
