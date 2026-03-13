<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'            => $this->faker->name(),
            'email'           => $this->faker->email(),
            'phone'           => $this->faker->phoneNumber(),
            'course'          => $this->faker->randomElement(['DAW', 'DAM', 'ASIR', 'SMR']),
            'enrollment_date' => $this->faker->date(),
        ];
    }
}
