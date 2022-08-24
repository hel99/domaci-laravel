<?php

namespace Database\Factories;

use App\Models\Osoba;
use Illuminate\Database\Eloquent\Factories\Factory;

class RacunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'broj_racuna' => $this->faker->numerify('##-#######-##'),
            'tip' => $this->faker->randomElement($array = array('EUR', 'USD', 'CHF')),
            'stanje' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5000000),
            'osoba_id' => Osoba::factory(),
        ];
    }
}
