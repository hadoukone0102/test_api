<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facture>
 */
class FactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $status = $this->faker->randomElement(['Facturer','Payer','Annuler']);
        return [
            //
            'montant' => $this->faker->numberBetween(100,2000),
            'client_id' => Client::factory(),
            'status' => $status,
            'date_facturation' => $this->faker->dateTimeThisDecade(),
            'date_paiement' => $status == 'Payer' ? $this->faker->dateTimeThisDecade() : NULL
        ];
    }
}
