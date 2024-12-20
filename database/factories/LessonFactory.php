<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => \App\Models\Course::factory(), // Link to a Course
            'title' => $this->faker->sentence(), // Random title
            'content' => $this->faker->paragraph(), // Random content
            'order' => $this->faker->numberBetween(1, 100), // Random order
        ];
    }
}
