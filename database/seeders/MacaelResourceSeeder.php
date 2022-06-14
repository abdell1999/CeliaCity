<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MacaelResourceSeeder extends Seeder
{

     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert([
            'id' => '50',
            'title' => 'Fuentes de los leones - Plaza de la Constitución.',
            'route' => 'storage/macael/FuenteLeones01.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '50',
            'id_pointofinterest' => '100',
            'id_resource' => '50',
        ]);
        DB::table('resources')->insert([
            'id' => '51',
            'title' => 'Centro de interpretación del mármol',
            'route' => '\storage\macael\CentrodeInterpretacion.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '51',
            'id_pointofinterest' => '101',
            'id_resource' => '51',
        ]);
        DB::table('resources')->insert([
            'id' => '52',
            'title' => 'El mortero más grande del mundo.',
            'route' => '\storage\macael\Mortero.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '52',
            'id_pointofinterest' => '102',
            'id_resource' => '52',
        ]);
        DB::table('resources')->insert([
            'id' => '53',
            'title' => 'Monumento a la Virgen del Rosario',
            'route' => '\storage\macael\MonumentoVirgen.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '53',
            'id_pointofinterest' => '103',
            'id_resource' => '53',
        ]);
        DB::table('resources')->insert([
            'id' => '54',
            'title' => 'Monumento Cantera Alma.',
            'route' => '\storage\macael\CanteraAlma.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '54',
            'id_pointofinterest' => '104',
            'id_resource' => '54',
        ]);
        DB::table('resources')->insert([
            'id' => '55',
            'title' => 'Monumento entrada de Macael.',
            'route' => '\storage\macael\EntradaMacael.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '55',
            'id_pointofinterest' => '105',
            'id_resource' => '55',
        ]);
        DB::table('resources')->insert([
            'id' => '56',
            'title' => 'Monumento al cantero.',
            'route' => '\storage\macael\MonumentoCantero.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '56',
            'id_pointofinterest' => '106',
            'id_resource' => '56',
        ]);
        DB::table('resources')->insert([
            'id' => '57',
            'title' => 'Mirador de la Virgen del Rosario.',
            'route' => '\storage\macael\MiradorVR.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '57',
            'id_pointofinterest' => '107',
            'id_resource' => '57',
        ]);
        DB::table('resources')->insert([
            'id' => '58',
            'title' => 'Mirador de las Canteras.',
            'route' => '\storage\macael\MiradorCanteras.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '58',
            'id_pointofinterest' => '108',
            'id_resource' => '58',
        ]);
        DB::table('resources')->insert([
            'id' => '59',
            'title' => 'Calles y porches.',
            'route' => '\storage\macael\Porchesycalles.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '59',
            'id_pointofinterest' => '109',
            'id_resource' => '59',
        ]);
        DB::table('resources')->insert([
            'id' => '60',
            'title' => 'Iglesia Parroquial Santa Maria Del Rosario.',
            'route' => '\storage\macael\IglesiaParroquial.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '60',
            'id_pointofinterest' => '110',
            'id_resource' => '60',
        ]);
        DB::table('resources')->insert([
            'id' => '61',
            'title' => 'Las Canteras.',
            'route' => '\storage\macael\LasCanteras.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '61',
            'id_pointofinterest' => '111',
            'id_resource' => '61',
        ]);
        DB::table('resources')->insert([
            'id' => '62',
            'title' => 'Bar la Plaza.',
            'route' => '\storage\macael\BarLaPlaza.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '62',
            'id_pointofinterest' => '112',
            'id_resource' => '62',
        ]);
        DB::table('resources')->insert([
            'id' => '63',
            'title' => 'Bar la Higuera.',
            'route' => '\storage\macael\BarLaHiguera.png',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '63',
            'id_pointofinterest' => '113',
            'id_resource' => '63',
        ]);
        DB::table('resources')->insert([
            'id' => '64',
            'title' => 'Taberna McCoy.',
            'route' => '\storage\macael\TabernaMcCoy.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '64',
            'id_pointofinterest' => '114',
            'id_resource' => '64',
        ]);
        DB::table('resources')->insert([
            'id' => '65',
            'title' => 'Bar la Bodeguilla.',
            'route' => '\storage\macael\BarLaPlaza.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '65',
            'id_pointofinterest' => '115',
            'id_resource' => '65',
        ]);
        DB::table('resources')->insert([
            'id' => '66',
            'title' => 'Cafetería Bulevar',
            'route' => '\storage\macael\CafeteriaBulevar.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '66',
            'id_pointofinterest' => '116',
            'id_resource' => '66',
        ]);
        DB::table('resources')->insert([
            'id' => '67',
            'title' => 'Heladería Martinez.',
            'route' => '\storage\macael\HeladeriaMartin.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '67',
            'id_pointofinterest' => '117',
            'id_resource' => '67',
        ]);
        DB::table('resources')->insert([
            'id' => '68',
            'title' => 'Hotel Cero Ocho.',
            'route' => '\storage\macael\HotelCero.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '68',
            'id_pointofinterest' => '118',
            'id_resource' => '68',
        ]);
        DB::table('resources')->insert([
            'id' => '69',
            'title' => 'Restaurante Los Membrives.',
            'route' => '\storage\macael\LosMembrives.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '69',
            'id_pointofinterest' => '119',
            'id_resource' => '69',
        ]);
        DB::table('resources')->insert([
            'id' => '70',
            'title' => 'Bar Restaurante las Piscinas.',
            'route' => '\storage\macael\RestauranteLasPiscinas.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '70',
            'id_pointofinterest' => '120',
            'id_resource' => '70',
        ]);
        DB::table('resources')->insert([
            'id' => '71',
            'title' => 'Pizzeria Francis.',
            'route' => '\storage\macael\PizzeriaFrancis.png',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '71',
            'id_pointofinterest' => '121',
            'id_resource' => '71',
        ]);
        DB::table('resources')->insert([
            'id' => '72',
            'title' => 'Restaurante las Carmelas.',
            'route' => '\storage\macael\RestauranteLasCarmelas.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '72',
            'id_pointofinterest' => '122',
            'id_resource' => '72',
        ]);
        DB::table('resources')->insert([
            'id' => '73',
            'title' => 'Bocatería-Cafetería Calle Larga.',
            'route' => '\storage\macael\BocateriaCalleLarga.jpeg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '73',
            'id_pointofinterest' => '123',
            'id_resource' => '73',
        ]);
        DB::table('resources')->insert([
            'id' => '74',
            'title' => 'Escuela Restaurante las Canteras.',
            'route' => '\storage\macael\EscuelaLasCanteras.jpeg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '74',
            'id_pointofinterest' => '124',
            'id_resource' => '74',
        ]);
        DB::table('resources')->insert([
            'id' => '75',
            'title' => 'Restaurante El Torero.',
            'route' => '\storage\macael\RestauranteElTorero.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '75',
            'id_pointofinterest' => '125',
            'id_resource' => '75',
        ]);
        DB::table('resources')->insert([
            'id' => '76',
            'title' => 'Consigliere.',
            'route' => '\storage\macael\Consigliere.jfif',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '76',
            'id_pointofinterest' => '126',
            'id_resource' => '76',
        ]);
        DB::table('resources')->insert([
            'id' => '77',
            'title' => 'Autoreparaciones Juan Aranega Pastor.',
            'route' => '\storage\macael\Juan aranega.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '77',
            'id_pointofinterest' => '127',
            'id_resource' => '77',
        ]);
        DB::table('resources')->insert([
            'id' => '78',
            'title' => 'Salon de estetica peluquería Asmae.',
            'route' => '\storage\macael\Asmaepeluqueria.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '78',
            'id_pointofinterest' => '128',
            'id_resource' => '78',
        ]);
        DB::table('resources')->insert([
            'id' => '79',
            'title' => 'Admon. de Loterías Nº 2 Ntra. Sra. del Rosario.',
            'route' => '\storage\macael\loteria.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '79',
            'id_pointofinterest' => '129',
            'id_resource' => '79',
        ]);
        DB::table('resources')->insert([
            'id' => '80',
            'title' => 'Estación de Servicio Ntra Sra. del Rosario.',
            'route' => '\storage\macael\gasolinera.jfif',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("pointofinterests_resources")->insert([
            'id' => '80',
            'id_pointofinterest' => '130',
            'id_resource' => '80',
        ]);

}
}
