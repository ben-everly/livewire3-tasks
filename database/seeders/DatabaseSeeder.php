<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Status;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Status::factory()
            ->count(4)
            ->create()
            ->each(function (Status $status) {
                Task::factory()->count(3)->for($status)->create();
            });
    }
}
