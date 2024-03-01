<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Comment;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->has(
            Feedback::factory()
            ->has(Comment::factory()->count(3))->count(2))
        ->create();

        // User::factory(3)
        //     ->hasfeedback(5, function (array $attributes, User $user) {
        //         return ['user_id' => $user->id];
        //     })
        //     //  ->hasomment(function (array $attributes, User $user, Feedback $feedback) {
        //     //     return [
        //     //         'user_id' => $user->id,
        //     //         'feedback_id' => $feedback_id
        //     //     ];
        //     // })
        //     ->create();
    }
}
