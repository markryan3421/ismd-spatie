<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'hxsdmrak',
            'email' => 'hxsdmrak@gmail.com',
        ]);

        Post::factory(14)->recycle($user)->create();

        Post::factory(15)->create();
    }
}
