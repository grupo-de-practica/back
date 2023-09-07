<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zone>
 */
class ZoneFactory extends Factory
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
            'zone_type_id' => fake()->numberBetween(1, 4), 
            'address' => fake()->address(),
            'latitude' => fake()->latitude($min = -90, $max = 90),
            'longitude' => fake()->longitude($min = -180, $max = 180),
            'order' => fake()->numberBetween(1 ,10),
        ];
    }
}
