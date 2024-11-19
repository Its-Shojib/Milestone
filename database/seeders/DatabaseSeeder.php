<?php

namespace Database\Seeders;

use App\Models\Projects;
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
            'name' => 'Md Shojib Hossain',
            'email' => 'mdshojib922@gmail.com',
            'password' => bcrypt('11111111'),
            'email_verified_at' => time()
        ]);

        Projects::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
