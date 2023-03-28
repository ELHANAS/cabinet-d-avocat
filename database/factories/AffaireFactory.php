<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Affaire>
 */
class AffaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'name'=>fake()->name(),
                'nomber'=>fake()->numberBetween(1,20) ,
                'adversaire'=>fake()->name(),
                'prix'=>fake()->numberBetween(0,1000),
                'jugement'=>fake()->name(),
                'jugementDate'=>fake()->date(),
                'type'=>fake()->name(),
                'etat'=>fake()->boolean() ,
                 'id_client'=>fake()->numberBetween(1,20) ,
             'id_user'=>fake()->numberBetween(1,20),

        ];
    }
}
