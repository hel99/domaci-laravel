<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OsobaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'tip' => $this->faker->randomElement($array = array('Standard', 'Premium')),
            'email' => $this->faker->unique()->safeEmail(),
            'broj_telefona' => $this->faker->phoneNumber(),
        ];
    }
}
