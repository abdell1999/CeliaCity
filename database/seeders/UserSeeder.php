<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'movilphone' => '666 777 888',
            'borndate' => '24/11/2021',
            'photo' => 'https://cdn.pixabay.com/photo/2020/07/14/13/06/icon-5404123_960_720.png',
            'addres' => 'Calle del quinto pino',
            'rol' => '0',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
