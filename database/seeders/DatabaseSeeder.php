<?php

namespace Database\Seeders;

use App\Http\Controllers\TeacherController;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.

     */
    public function run(): void
    {



        $this->call(
            [
                RolSeeders::class,
                ProjectSeeder::class,
                UserSeeder::class,
                TaskSeeder::class,
            ]
        );
    }
}
