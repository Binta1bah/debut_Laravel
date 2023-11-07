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
    public function definition()
    {
        $priorite = ['haute', 'moyenne', 'faible'];

        return [

            'nom_tache' => fake()->name,
            'description_tache' => fake()->text(),
            'date_echeance' => fake()->date(),
            'is_termined' => fake()->boolean(),
            'priorite' => $priorite[mt_rand(0, 2)]




        ];
    }
}
