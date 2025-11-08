<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(2),
            'description' => fake()->paragraph(),
            'duration' => fake()->numberBetween(30, 180),
            'price' => fake()->randomFloat(2, 10, 500),
            'image' => 'https://i.pinimg.com/736x/69/77/1b/69771b26e9f1dfd9b0bdd1a2eddff89a.jpg',
        ];
    }
}
