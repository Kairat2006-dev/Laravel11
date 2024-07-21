<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_id' => Profile::inRandomOrder()->first()->id,
            'content' => fake()->text,
//            'post_id' => Post::inRandomOrder()->first()->id,
            'commentable_type'=>'App\Models\Post',
            'commentable_id'=>Post::inRandomOrder()->first()->id,
            'like' => fake()->numberBetween(1,65),
            'status' => fake()->numberBetween(1,2),
        ];
    }
}
