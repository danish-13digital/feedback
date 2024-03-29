<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Feedback;
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
            'comment' => fake()->sentence(10),
            'user_id' => User::factory()->create()->id,
            'feedback_id' => Feedback::factory()->create()->id,
        ];
    }
}
