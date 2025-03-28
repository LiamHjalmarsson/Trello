<?php

namespace Database\Factories;

use App\Models\Board;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskList>
 */
class TaskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $board_id = Board::inRandomOrder()->first() ?: NULL;

        return [
            'title' => fake()->title(),
            'board_id' => $board_id
        ];
    }
}
