<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'format' => $this->faker->randomElement(['paper','ebook','pdf']),
            'rating' => $this->faker->numberBetween(1,5),
            'review' => $this->faker->randomElement(['very good','bad','good']),
            'status' => $this->faker->randomElement(['reading','wishing','read']),
            'phrase' => $this->faker->paragraph(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
