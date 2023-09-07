<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_id' => fake()->numberBetween(1, 50), //Property::factory(),
            'name' => $this->getNameImage(),
            'src' => fake()->imageUrl(640, 480, 'house', true, null, false, 'jpg'),
            'type' => fake()->randomElement(['property', 'plane']),
            'order' => fake()->numberBetween(1, 10)
        ];
    }

    private function getNameImage(): string
    {
        return fake()->word().'.jpg';
    }
}
