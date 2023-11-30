<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AffectationNiveau>
 */
class AffectationNiveauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "user_id" => \App\Models\User::inRandomOrder()->first()->id,
            "niveau_id" => \App\Models\Niveau::inRandomOrder()->first()->id,
        ];
    }
}
