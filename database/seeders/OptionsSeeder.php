<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'name' => 'favicon',
            'value' => 'faviconroute.ico',
            'type' => 'image'
        ]);

        DB::table('options')->insert([
            'name' => 'townname',
            'value' => 'Town',
            'type' => 'text'
        ]);

        DB::table('options')->insert([
            'name' => 'logo',
            'value' => 'logo.png',
            'type' => 'image'
        ]);

        DB::table('options')->insert([
            'name' => 'ubication',
            'value' => 'latitude, longitude',
            'type' => 'text'
        ]);

        DB::table('options')->insert([
            'name' => 'coverpage',
            'value' => 'portada.png',
            'type' => 'image'
        ]);

        DB::table('options')->insert([
            'name' => 'metatitle',
            'value' => 'Titulo metadatos',
            'type' => 'text'
        ]);

        DB::table('options')->insert([
            'name' => 'metadescription',
            'value' => 'Descripción metadatos',
            'type' => 'text'
        ]);

        DB::table('options')->insert([
            'name' => 'pageowner',
            'value' => 'owners name',
            'type' => 'text'
        ]);


        DB::table('options')->insert([
            'name' => 'shortdescription',
            'value' => 'Descripción reducida',
            'type' => 'text'
        ]);

        DB::table('options')->insert([
            'name' => 'longdescription',
            'value' => 'Descripción extensa',
            'type' => 'text'
        ]);


        DB::table('options')->insert([
            'name' => 'theme',
            'value' => 'dark',
            'type' => 'text'
        ]);

    }
}
