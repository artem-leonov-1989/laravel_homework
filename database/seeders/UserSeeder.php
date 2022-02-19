<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        return DB::table('users')->insert(
            [
                'name' => 'Администратор справочных данных',
                'email' => 'admin',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role' => 5,
                'remember_token' => Str::random(10)
            ]
        );
    }
}
