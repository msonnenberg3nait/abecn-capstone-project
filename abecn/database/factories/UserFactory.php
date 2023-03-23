<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Membership;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed
     */
    public function definition():array
    {
        return [
            'group_id' => Group::factory(),
            'membership_id' => Membership::factory(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => fake()->phoneNumber(),
            'dob' => fake()->date(),
            'primary_address' => fake()->address(),
            'secondary_address' => fake()->address(),
            'city' => fake()->city(),
            'postal' => fake()->postcode(),
            'display_name' => fake()->userName(),
            'organization' => fake()->company(),
            'specialty' => fake()->jobTitle(),
            'date_registered' => now(),
            'active_yn' => fake()->boolean(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified(): static
    {
        return $this->state(function (array $attributes) => [
                'email_verified_at' => null,
            ]);
    }
}
