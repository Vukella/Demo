<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;
    public function definition(): array
    {
        return [
            //
            'user_id' => User::factory(),
            'slug' => $this->faker->unique()->slug(),
            'title' => $this->faker->unique()->sentence(),
            'thumbnail' => $this->faker->imageUrl(),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(4)) . '</p>',
            'summary' => '<p>' . implode('</p><p>', $this->faker->paragraphs(1)) . '</p>',
            'published_at' => now(),

        ];
    }
}
