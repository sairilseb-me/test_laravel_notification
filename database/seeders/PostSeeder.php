<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\PostFactory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(int $limit): void
    {
        Post::factory()->count($limit)->create();
    }
}
