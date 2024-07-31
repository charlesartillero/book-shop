<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookMDB>
 */
class BookMongoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word,
            'author' => fake()->name(),
            'genre' => fake()->word(),
            'description' => fake()->text,
            'quantity' => fake()->numberBetween(1, 10),
            'price' => fake()->numberBetween(100, 1000),
            'published_date' => fake()->date,
        ];
    }
}
