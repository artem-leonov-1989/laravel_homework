<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => random_int(10000, 99999),
            'workshop_id' => random_int(1,3),
            'model' => Str::random(10),
            'factory_number' => Str::random(10),
            'production_year' => random_int(1940, 2022),
            'company_manufacturer' => $this->faker->streetName()
        ];
    }
}
