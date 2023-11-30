<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GestionDroitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //'id' => $this->faker->uuid,
            'libelle' => fake()->sentence,
            'user_id' => App\Model\User::inRandomOrder()->first()->id,
            
        ];
    }
}
