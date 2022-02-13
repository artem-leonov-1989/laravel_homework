<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User_workshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_workshop')->insert(
          [
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
              ['user_id' => random_int(1,10), 'workshop_id' => random_int(1,5)],
          ]
        );
    }
}
