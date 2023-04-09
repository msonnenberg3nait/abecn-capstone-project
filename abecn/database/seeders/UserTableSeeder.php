<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\User;
use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $group = Group::factory(3)->create();

        User::factory(5)->state(new Sequence(
            [
                'group_id' => $group->first()->id,
            ],
            [
                'group_id' => $group->last()->id,
            ],
        ))->create();

        Sponsor::factory(9)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}