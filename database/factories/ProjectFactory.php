<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
<<<<<<< HEAD
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
=======
 * @extends Factory<Project>
>>>>>>> upstream/crudGenerico
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projects = config('projects');
<<<<<<< HEAD
        $title = array_rand($projects, 1);
        $project = $projects[$title];


        return [
            "title" => $title,
            "description" => $project,
            "hours" => $this->faker->numberBetween(10,200),
            "start_date" => $this->faker->date(),
=======
        $project = array_rand($projects);

        return [
            'title' => $project,
            'description' => $projects[$project],
            "hours"=> fake()->numberBetween(20,200),
            "start_date"=>fake()->date()
>>>>>>> upstream/crudGenerico
            //
        ];
    }
}
