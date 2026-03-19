<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Teacher;
=======
use App\Http\Controllers\TeacherController;
>>>>>>> upstream/crudGenerico
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

<<<<<<< HEAD
        $this->call([
            RolSeeders::class,
            UserSeeder::class,
            ProjectSeeder::class,
        ]);

=======


        $this->call(
            [
                RolSeeders::class,
                ProjectSeeder::class,
                UserSeeder::class,
                TaskSeeder::class,
            ]
        );
>>>>>>> upstream/crudGenerico
    }
}
