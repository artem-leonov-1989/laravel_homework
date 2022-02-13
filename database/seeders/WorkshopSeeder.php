<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('workshops')->insert(
            [
                ['division_code' => 211, 'name' => 'Мх-1', 'created_at' => now(), 'updated_at' => now()],
                ['division_code' => 212, 'name' => 'Мх-2', 'created_at' => now(), 'updated_at' => now()],
                ['division_code' => 318, 'name' => 'Мх-3', 'created_at' => now(), 'updated_at' => now()],
                ['division_code' => 606, 'name' => 'Мх-6', 'created_at' => now(), 'updated_at' => now()],
                ['division_code' => 612, 'name' => 'Мх-12', 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
