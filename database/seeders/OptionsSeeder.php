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
            'value' => 'Purullena',
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
            'value' => '
            Purullena es una localidad y un municipio español situado en la parte centro-oeste de la comarca de Guadix, en la provincia de Granada, comunidad autónoma de Andalucía.',
            'type' => 'text'
        ]);

        DB::table('options')->insert([
            'name' => 'longdescription',
            'value' => 'Purullena destaca por su gran cantidad de casas cueva y por ser un pueblo eminentemente agrícola y artesanal. Es famoso por su cerámica decorada con azul cobalto con la técnica del reflejo policromado, cuya tradición se remonta al siglo XVI y cuyas piezas se exponen y venden en tiendas cueva. “Una villa alucinante”, en palabras del historiador Carlos Asenjo Sedano, “que permanece ‘colgada’ de las arcillas de las cárcavas que se ofrecen en infinidad de pinguruchos desconcertantes” y en cuyas viviendas subterráneas dice la leyenda que se refugiaba el célebre bandolero José María ’El Tempranillo’.',
            'type' => 'text'
        ]);


        DB::table('options')->insert([
            'name' => 'theme',
            'value' => 'dark',
            'type' => 'text'
        ]);

    }
}
