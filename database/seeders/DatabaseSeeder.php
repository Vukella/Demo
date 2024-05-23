<?php

namespace Database\Seeders;

use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(5)->create();
        $categories = Category::factory(10)->create();
        $tags = Tag::factory(20)->create();

        Blog::factory(50)->make()->each(function($blog) use ($users, $categories, $tags) {
            $blog->user_id = $users->random()->id;
            $blog->save();

            $blogCategories = $categories->random(rand(1, 3))->pluck('id');
            $blog->categories()->attach($blogCategories);

            $blogTags = $tags->random(rand(1, 5))->pluck('id');
            $blog->tags()->attach($blogTags);
        });

    }
}
