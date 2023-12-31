<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Status;
use App\Models\Task;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'email' => 'test@localhost'
        ]);
        Team::factory()
            ->count(3)
            ->create()
            ->each(function (Team $team) use ($user) {
                Status::factory()
                    ->count(4)
                    ->for($team)
                    ->create()
                    ->each(function (Status $status) use ($team, $user) {
                        Task::factory()
                            ->count(3)
                            ->for($team)
                            ->for($status)
                            ->for($user)
                            ->create();
                    });
            });
    }
}
