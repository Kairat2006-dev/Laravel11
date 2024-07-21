<?php

namespace Database\Factories;

use App\Models\Compani;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),

            'secind_name' => fake()->firstName(),

            'third_name' => fake()->lastName(),

            'phone' => fake()->text(),

            'status' => fake()->numberBetween(),

            'age' => fake()->numberBetween(0,10),
            'profileable_type' => 'App\Models\User',
            'profileable_id' => User::factory()->create()->first()->id,
        ];
    }
}
