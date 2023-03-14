<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compte>
 */
class CompteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $clients = Client::pluck('id')->toArray();

        return [
            'numero_compte' => fake()->unique()->regexify('[0-9]{18}'),
            'sold' => fake()->random_int(0, 5000),
            'client_id' => fake()->randomElement($clients)
        ];
    }
}
