<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PointofviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pointofinterests')->insert([
            'id' => '1',
            'name' => 'Cuesta del Negro',
            'latitude' => '37.336014',
            'longitude' => '-3.235191',
            'movilephone' => '',
            'text' => 'La Cuesta del Negro se sitúa entre cerros y laderas que se intercalan con barrancos y quebrados los cuales 
            conforman una defensa natural estratégica. Además está próximo a recursos esenciales como agua, 
            tierra fértil y planicies para el ganado.
            
            En este punto geográfico se ubica el poblado argárico de la Cueta del Negro, el cual data de entre 1950-1500 AC.
            Tras un breve abandono vuelve a ser ocupado en el Bronce Tardío, en el que se verifica una reocupación con 
            cabañas de suelo rectangular y nueva cerámica de tipo Cogotas con decoración boquique.
            
            El conocimiento de la cronología y secuencia de este yacimiento se convirtió en los objetivos fundamentales del 
            trabajo realizado por el Departamento de Prehistoria de la Universidad de Granada en 1971 y 1972. Organizados según 
            el planteamiento de las zonas en las que se dividía el pueblo según su topografía, los resultados que se revelaron 
            fueron satisfactorios, ya que en aquellas zonas de menor altura que se identificaron con las áreas habitadas del poblado
            (zonas A, B C, D y E) se documentaron enterramientos argáricos, a diferencia de la parte más alta del asentamiento 
            (zonas F y G) donde se ubicaron estructuras defensivas pero no enterramientos.
            
            En el interior de las viviendas, como en el resto de yacimientos de la cultura de El Argar, aparecen sepulturas, 
            habiéndose excavado un total de treinta y seis enterramientos, la mayoría con enterramientos individuales en posición fetal, 
            aunque algunas sepulturas son dobles. De todas ellas, sólo dos se presentan en urnas, a diferencia del resto que 
            corresponden a enterramientos tipo fosa con cueva lateral. Además, acompañando al entierro, que en ocasiones se ubicaba 
            sobre una especie de alfombra de esparto, se encontraba el ajuar compuesto por elementos como armas, útiles y 
            ornamentos sobre distintos tipos de soportes, recipientes de cerámica y otros objetos que aparecen en menor número, 
            así como ofrendas de carne. 
            
            El yacimiento se encuentra repartido entre los municipios de Darro y Purullena.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '2',
            'name' => 'Iglesia Parroquial de San Martín',
            'latitude' => '37.317653',
            'longitude' => '-3.1896225',
            'movilephone' => '',
            'text' => 'Estructura mudéjar de planta rectangular y una sola nave. Posee un magnífico artesonado, 
            realizado por Baltasar de la Hoya en 1558, y un artístico retablo firmado entre otros por Dionisio de Ávila.
            
            La torre, situada a los pies, consta de dos cuerpos de ladrillo además del campanario, rematados por un capitel de hierro 
            de estilo neogótico. La fachada principal tiene arco de medio punto y cornisa.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
