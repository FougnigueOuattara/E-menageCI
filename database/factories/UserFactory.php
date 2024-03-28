<?php

namespace Database\Factories;
use Ramsey\Uuid\Uuid; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
        $staff = $this->faker->randomElement(['Peintre', 'Ferronnier', 'Menuisier', 'Electricien', 'Plombier']);

        return [
            'id'=>Uuid::uuid4(),
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'email' => fake()->email,
            'age' => 20,
            'gender' => 'M',
            'phoneNumber' => fake()->phoneNumber(),
            'city' => fake()->city(),
            'quarter' => fake()->city(),
            'photo' => fake()->image(),
            'staff' => "Ferronnier",
            'password' => Hash::make('password'),
            'email' => fake()->unique()->safeEmail(),
            'created_at' => now(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
