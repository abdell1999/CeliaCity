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
            'value' => 'theme1',
            'type' => 'text'
        ]);

        DB::table('options')->insert([
            'name' => 'point1',
            'value' => '1',
            'type' => 'point'
        ]);

        DB::table('options')->insert([
            'name' => 'point2',
            'value' => '2',
            'type' => 'point'
        ]);

        DB::table('options')->insert([
            'name' => 'point3',
            'value' => '3',
            'type' => 'point'
        ]);

        DB::table('options')->insert([
            'name' => 'coverpage2',
            'value' => 'portada2.png',
            'type' => 'image'
        ]);

        DB::table('options')->insert([
            'name' => 'template',
            'value' => '1',
            'type' => 'template'
        ]);

        DB::table('options')->insert([
            'name' => 'history',
            'value' => 'El Cid convoca a sus vasallos; éstos se destierran con él. Adiós del Cid a Vivar. (Envió a buscar a todos sus parientes y vasallos, y les dijo cómo el rey le mandaba salir de todas sus tierras y no le daba de plazo más que nueve días y que quería saber quiénes de ellos querían ir con él y quiénes quedarse. A los que conmigo vengan que Dios les dé muy buen pago; también a los que se quedan contentos quiero dejarlos. Habló entonces Álvar Fáñez, del Cid era primo hermano: "Con vos nos iremos, Cid, por yermos y por poblados; no os hemos de faltar mientras que salud tengamos, y gastaremos con vos nuestras mulas y caballos y todos nuestros dineros y los vestidos de paño, siempre querremos serviros como leales vasallos." Aprobación dieron todos a lo que ha dicho don Álvaro. Mucho que agradece el Cid aquello que ellos hablaron. El Cid sale de Vivar, a Burgos va encaminado, allí deja sus palacios yermos y desheredados. Los ojos de Mío Cid mucho llanto van llorando; hacia atrás vuelve la vista y se quedaba mirándolos. Vio como estaban las puertas abiertas y sin candados, vacías quedan las perchas ni con pieles ni con mantos, sin halcones de cazar y sin azores mudados. Y habló, como siempre habla, tan justo tan mesurado: "¡Bendito seas, Dios mío, Padre que estás en lo alto! Contra mí tramaron esto mis enemigos malvados". 2 Agüeros en el camino de Burgos Ya aguijan a los caballos, ya les soltaron las riendas. Cuando salen de Vivar ven la corneja a la diestra, pero al ir a entrar en Burgos la llevaban a su izquierda. Movió Mío Cid los hombros y sacudió la cabeza: "¡Ánimo, Állvar Fáñez, ánimo, de nuestra tierra nos echan, pero cargados de honra hemos de volver a ella! " 3 El Cid entra en Burgos Ya por la ciudad de Burgos el Cid Ruy Díaz entró. Sesenta pendones lleva detrás el Campeador. Todos salían a verle, niño, mujer y varón,',
            'type' => 'text'
        ]);

    }
}
