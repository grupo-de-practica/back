<?php

namespace Database\Factories;

use App\Models\PropertyFeature;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(['role_id'=>1]),
            'feature_id' => PropertyFeature::factory(),
            'city_id' => fake()->numberBetween(1, 1245), 
            'address' => fake()->address(),
            'latitude' => fake()->latitude($min = -90, $max = 90),
            'longitude' => fake()->longitude($min = -180, $max = 180),
            'price' => fake()->randomFloat(2, 100000, 9000000),
            'type' => fake()->randomElement(['casa', 'departamento']),
            'requirements' => json_encode(fake()->randomElements(['No fumar', 'Cedula de identidad', 'Se requiere antecedentes'], 2)),
            'is_published' => fake()->randomElement([true, false]),
        ];
    }
}
