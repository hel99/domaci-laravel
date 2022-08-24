<?php

namespace Database\Factories;

use App\Models\Racun;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransakcijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tip' => $this->faker->randomElement($array = array('Priliv', 'Odliv')),
            'iznos' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5000000),
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' => $this->faker->randomElement($array = array('Izvrsena', 'Neizvrsena')),
            'racun_id' => Racun::factory()
        ];
    }
}
