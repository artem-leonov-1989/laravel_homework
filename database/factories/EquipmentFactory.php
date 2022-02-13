<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => random_int(1000, 99999),
            'span' => random_int(1, 4),
            'model' => $this->faker->firstName,
            'workshop_id' => random_int(1, 5)
        ];
    }
}
