<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => 'Post ' . $i,
                'description' => 'This is post number ' . $i,
                'user_id' => User::inRandomOrder()->first()->id,
            ]);
        }
    }
}