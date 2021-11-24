<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'surname1' => '-',
            'surname2' => '-',
            'email' => 'emaildeprueba@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '123456789',
            'movilphone' => '666777888',
            'borndate' => '2021/11/24',
            'photo' => 'https://cdn.pixabay.com/photo/2020/07/14/13/06/icon-5404123_960_720.png',
            'address' => 'Calle del quinto pino',
            'rol' => '0',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
