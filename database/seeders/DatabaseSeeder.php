<?php

namespace Database\Seeders;

use App\Models\Teacher;
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
        User::create([
            "name" => "Geraldine",
            "email" => "a@a.com",
            "password" => bcrypt("12345678")
        ]);
        $this->call([
            TeacherSeeder::class,
            ProjectSeeder::class,
            StudentSeeder::class,
        ]);

    }
}
