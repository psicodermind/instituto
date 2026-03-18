<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
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
        $project = array_rand($projects);

        return [
            'title' => $project,
            'description' => $projects[$project],
            "hours"=> fake()->numberBetween(20,200),
            "start_date"=>fake()->date()
            //
        ];
    }
}
