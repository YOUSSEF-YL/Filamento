<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quiz_id' => \App\Models\Quiz::factory(),
            'question_text' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(['multiple_choice', 'true_false']),
            'options' => json_encode(['A' => 'Option 1', 'B' => 'Option 2', 'C' => 'Option 3']), // Example JSON
            'correct_answer' => 'A',
        ];
    }
}
