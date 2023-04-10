<?php

namespace Database\Factories;

use App\Models\Group;

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
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();
        $primaryAddress = fake()->streetAddress();
        $secondaryAddress = fake()->streetAddress();
        $city = fake()->city();
        return [
            'group_id' => Group::factory(),
            'first_name' => $firstName,
            'last_name' => $lastName,
            'name' => $firstName.' '.$lastName,
            'display_name' => fake()->userName(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'dob' => fake()->date(),
            'organization' => fake()->company(),
            'specialty' => fake()->jobTitle(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),

            'line1' => $primaryAddress,
            'line2' => $secondaryAddress,
            'pcity' => $city,
            'city' => $city,
            'state' => fake()->stateAbbr(),
            'country' => fake()->countryCode(),
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
