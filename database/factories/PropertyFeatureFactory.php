<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyFeature>
 */
class PropertyFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'util_area' => fake()->randomFloat(2, 100, 1000),
            'total_area' => fake()->randomFloat(2, 200, 2000),
            'bedrooms' => fake()->numberBetween(1, 4),
            'bathrooms' => fake()->numberBetween(1, 2),
            'kitchens' => fake()->numberBetween(1, 2),
            'floors' => fake()->numberBetween(1, 2)
        ];
    }
}
