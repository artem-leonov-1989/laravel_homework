<?php

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\Order;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $this->call(WorkshopSeeder::class);
        $this->call(User_workshopSeeder::class);
        Equipment::factory(30)->create();
        $this->call(StageSeeder::class);
        Order::factory(30)->create();
    }
}
