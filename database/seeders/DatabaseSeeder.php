<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Sport;
use App\Models\MatchEvent;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();

        Sport::factory(5)->create();

        MatchEvent::factory(10)->create();

    }
}
