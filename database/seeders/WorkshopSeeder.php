<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    public function run()
    {
        return DB::table('workshops')->insert(
          [
              ['name' => 'Механический цех №1', 'division_code' => 211, 'created_at' => now(), 'updated_at' => now()],
              ['name' => 'Механический цех №2', 'division_code' => 212, 'created_at' => now(), 'updated_at' => now()],
              ['name' => 'Механический цех №6', 'division_code' => 606, 'created_at' => now(), 'updated_at' => now()],
          ]
        );
    }
}
