<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Post::factory(36)->create();

        // Pages
        \App\Models\Post::factory()->create(['title' => 'Example',  'slug' => 'example',  'type' => 'PAGE']);
        \App\Models\Post::factory()->create(['title' => 'Features', 'slug' => 'features', 'type' => 'PAGE']);
        \App\Models\Post::factory()->create(['title' => 'Overview', 'slug' => 'overview', 'type' => 'PAGE']);
        \App\Models\Post::factory()->create(['title' => 'About',    'slug' => 'about',    'type' => 'PAGE']);
    }
}
