<?php

namespace Database\Factories;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'course_id' => Course::factory(),
            'status' => $this->faker->randomElement(['active', 'completed']),
            'progress' => $this->faker->numberBetween(0, 100),
        ];
    }
}
