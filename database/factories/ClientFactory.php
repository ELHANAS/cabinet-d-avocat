<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>fake()->name(),
            'prenom'=>fake()->lastName(),
            'adresse'=>fake()->address(),
            'ville'=>fake()->city(),
            'tel'=>fake()->phoneNumber(),
            'cin'=>fake()->swiftBicNumber(),
            'active'=>fake()->boolean(),
            'datenaissance'=>fake()->date()
        ];
    }
}
