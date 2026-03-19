<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        //crear un usuario admin
       $user = User::create([
            "name" => "admin",
            "email" => "a@a.com",
            "password" => bcrypt("12345678")
        ]);
        $user->assignRole('admin');
        //crear 50 profesores
        User::factory()->count(50)->create()->each(function ($user) {
            $user->department=Arr::random(config('departments'));
            $user->save();
            $user->assignRole('teacher');
        });
        //crear 50 estudiantes
        User::factory()->count(50)->create()->each(function ($user) {
            $user->assignRole('student');
        });
        //crear 50 usuarios registrados
        User::factory(50)->create()->each(function ($user) {
            $user->assignRole('registered');
=======
        $user = User::create([
            "name"=>"admin",
            "email"=>"a@a.com",
            "password"=>bcrypt("12345678"),

        ]);
        $user->assignRole("admin");

        //20 profesores
        User::factory()->count(20)->create()->each(function ($user) {
            $department = Arr::random(config('departments'));
            $user->department= $department;
            $user->save();
            $user->assignRole("teacher");
        });
        User::factory()->count(20)->create()->each(function ($user) {
            $user->assignRole("student");
        });
        User::factory()->count(20)->create()->each(function ($user) {
            $user->assignRole("guest");
>>>>>>> upstream/crudGenerico
        });
    }
}
