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
               \App\Models\User::factory()->create(['name' => 'Admin User', 'email' => 'admin@admin.com']);

               \App\Models\User::factory(4)->create();

               $categories = \App\Models\Category::factory(5)->create();

               $tags = \App\Models\Tag::factory(5)->create();
               
               $post = \App\Models\Post::factory(50)->create();

               $post->each(function($post) use ($categories, $tags){

                    $post->categories()->attach(
                        $categories->random(rand(1, 3))->pluck('id')->toArray()
                    );

                    $post->tags()->attach(
                        $tags->random(rand(1, 5))->pluck('id')->toArray()
                    );


               });
    }
}
