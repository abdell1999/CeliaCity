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


        DB::table('users')->insert([
            'name' => 'Abdellah',
            'surname1' => 'Bukad-duh',
            'surname2' => 'Rappani',
            'email' => 'abdellahbukadduh99@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '950950950',
            'movilphone' => '602077124',
            'borndate' => '1999/07/16',
            'photo' => 'https://augecorp.com.mx/wp-content/uploads/2019/09/administrador-multiusos-empresas.jpg',
            'address' => 'Calle etc',
            'rol' => '0',
            'created_at' => now(),
            'updated_at' => now()

        ]);




        DB::table('users')->insert([
            'name' => 'Pepito',
            'surname1' => 'Grillo',
            'surname2' => '',
            'email' => 'pepitogrillo@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '950950951',
            'movilphone' => '602077125',
            'borndate' => '1999/07/16',
            'photo' => 'https://previews.123rf.com/images/anwarsikumbang/anwarsikumbang1502/anwarsikumbang150200446/36649713-hombre-avatar-de-dibujos-animados-imagen-usuario-personaje-ilustraci%C3%B3n-vectorial.jpg',
            'address' => 'Calle etc 2',
            'rol' => '2',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
