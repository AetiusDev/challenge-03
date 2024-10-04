<?php

namespace Database\Seeders;

use App\Models\Main;
use App\Models\Many;
use App\Models\One;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Main::factory()
            ->has(One::factory())
            ->has(Many::factory()->count(rand(2, 4)))
            ->count(10)
            ->create();
    }
}
