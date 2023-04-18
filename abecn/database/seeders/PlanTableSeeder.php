<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     * 
     */
    public function run(): void
    {
        Membership::create([
            'name' => 'Individual',
            'slug' => 'individual',
            'stripe_name' => 'individual',
            'stripe_product_id' => 'prod_NbhV44wu2U7d7P',
            'stripe_price_id' => 'price_1MqU6QEe4PK41pzAAfwvDtWz',
            'price' => 75,
            'abbreviation' => '/year',
        ]);

        Membership::create([
            'name' => 'Student',
            'slug' => 'student',
            'stripe_name' => 'student',
            'stripe_product_id' => 'prod_NbhVguzFC2jBAX',
            'stripe_price_id' => 'price_1MqU6wEe4PK41pzA2LgxD7yl',
            'price' => 25,
            'abbreviation' => '/year',
        ]);
    }
}