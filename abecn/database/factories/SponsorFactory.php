<?php

namespace Database\Factories;
use App\Models\Sponsor;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sponsor>
 */
class SponsorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->company(),
            'company_contact' => fake()->name(),
            'primary_address' => fake()->address(),
            'city' => fake()->city(),
            'postal' => fake()->postcode(),
            'email' => fake()->companyEmail(),
            'phone' => fake()->phoneNumber(),
            'img' => fake()->imageUrl($width=400, $height=200),
            'bio' => fake()->paragraph(2),
            'project_img' => fake()->imageUrl($projectWidth=400, $projectHeight=200)
        ];
    }
}
