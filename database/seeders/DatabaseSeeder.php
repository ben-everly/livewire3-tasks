<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Status;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Team::factory()
            ->count(3)
            ->create()
            ->each(function (Team $team) {
                Status::factory()
                    ->count(4)
                    ->for($team)
                    ->create()
                    ->each(function (Status $status) use ($team) {
                        Task::factory()->count(3)->for($team)->for($status)->create();
                    });
            });
    }
}
