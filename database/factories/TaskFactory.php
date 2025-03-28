<?php

namespace Database\Factories;

use App\Models\TaskList;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = User::inRandomOrder()->first() ?: NULL;
        $list_id = TaskList::inRandomOrder()->first() ?: NULL;

        return [
            'title' => fake()->title(),
            'user_id' => $user_id,
            'list_id' => $list_id, 
        ];
    }
}
