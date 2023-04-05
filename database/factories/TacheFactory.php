<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tache>
 */
class TacheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titre" => fake()->title(),
            "Description" =>fake()->text(),
            "lalarme" => fake()->boolean(),
            "TacheF" => fake()->boolean(),
            "id_affaire" => fake()->numberBetween(),
            "DTache" => fake()->date()
        ];
    }

}
