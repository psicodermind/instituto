<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'dni' => fake()->dni(),
            'phone' => fake()->phoneNumber(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
=======
            "name"=>$this->faker->name(),
            "email"=>$this->faker->unique()->safeEmail(),
            "email_verified_at"=>now(),
            "password"=>bcrypt("12345678"),
            "dni" => fake()->dni(),
            "phone"=>fake()->phoneNumber(),

            //
>>>>>>> upstream/crudGenerico
        ];
    }
}
