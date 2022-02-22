<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{

    public function run()
    {
        return DB::table('roles')->insert(
            [
                ['name' => 'Механик цеха'],
                ['name' => 'Инспектор'],
                ['name' => 'Начальник головной службы'],
                ['name' => 'Начальник цеха'],
                ['name' => 'Администратор справочных таблиц'],
            ]
        );
    }
}
