<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\studentcoreModels;

class LoginStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        studentcoreModels::factory()
        ->times(50)
        ->create();
    }
}
