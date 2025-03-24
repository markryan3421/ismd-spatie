<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->realText(50);
        $content = array_reduce(fake()->paragraphs(rand(2, 3)), function ($carry, $paragraph) {
            return $carry . '<p>' . $paragraph . '</p>';
        }, '');

        return [
            'user_id' => User::factory(),
            'title' => $title,
            'post_slug' => Str::slug($title), 
            'content' => $content,
            'is_published' => rand(0, 1),
        ];
    }
}
