<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Membership;
use App\Models\User;
use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $group = Group::factory(3)->create();

        $individual = Membership::create([
            'name' => 'Individual',
            'slug' => 'individual',
            'stripe_name' => 'individual',
            'stripe_id' => 'price_1MqU6QEe4PK41pzAAfwvDtWz',
            'price' => 75,
            'abbreviation' => '/year',
        ]);

        $student = Membership::create([
            'name' => 'Student',
            'slug' => 'student',
            'stripe_name' => 'student',
            'stripe_id' => 'price_1MqU6wEe4PK41pzA2LgxD7yl',
            'price' => 25,
            'abbreviation' => '/year',
        ]);

        User::factory(5)->state(new Sequence(
            [
                'group_id' => $group->first()->id,
                'membership_id' => $individual
            ],
            [
                'group_id' => $group->last()->id,
                'membership_id' => $student
            ],
        ))->create();

        Sponsor::factory(9)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
