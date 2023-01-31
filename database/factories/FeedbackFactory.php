<?php

namespace Database\Factories;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= \App\Models\Feedback::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => fake()->phoneNumber(),
            'text' => $this->faker->text(),
        ];
    }
}
