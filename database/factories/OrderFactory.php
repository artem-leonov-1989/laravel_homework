<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $equipment = DB::table('equipment')->select('id')->get();
        /*dd($equipment);*/
        $random_equipment = random_int(0, count($equipment)-1);
        return [
            'equipment_id' => $equipment[$random_equipment]->id,
            'stage_id' => random_int(1, 7),
        ];
    }
}
