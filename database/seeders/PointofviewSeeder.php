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
            'latitude' => '',
            'longitude' => '',
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

        DB::table('pointofinterests')->insert([
            'id' => '3',
            'name' => 'Cueva-Museo <br>"La Inmaculada"',
            'latitude' => '37.3165462',
            'longitude' => '-3.1859825',
            'movilephone' => '',
            'text' => 'Purullena es conocida como la Ciudad Troglodita, nombre otorgado en los años 60, ya que era un pueblo en el que la única estructura arquitectónica conocida era la iglesia, 
            y toda la población vivía en cuevas. Hoy en día muchas familias siguen disfrutando de esta forma de vivir, siendo el lugar de más concentración de cuevas de la Comarca de Guadix. 
            Purullena goza de un rico pasado desde la pre-historia a la actualidad. Su ubicación en una encrucijada de caminos natural, además de estar rodeada de importantes sistemas montañosos, 
            hacían que fuese un lugar de paso obligatorio. Tanto las culturas del Algar, Íbera, Romana, Musulmana, Cristiana y Actualidad han convivido con las cuevas de un modo u otro, 
            dejando huella en este lugar.
            Esta cueva es un amplio Museo Etnológico, con una variada exposición de utensilios antiguos, herramientas, mobiliario, enseres, objetos curiosos, fotografías,etc. Todo ello, recopilado y usado por los pueblos de la Comarca de Guadix',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '4',
            'name' => 'Torre Al-Magruz',
            'latitude' => '37.3390065',
            'longitude' => '-3.2118038',
            'movilephone' => '',
            'text' => 'MODIFICAR! 
            Las torres-atalayas que se encuentran en la comarca de Guadix forman parte del sistema defensivo que los árabes implementaron a partir del siglo XIV
            ante el avance de las tropas cristianas y la pérdida de territorio. 
            La planta de estas fortificaciones solía ser circular y su desarrollo troncónico, aunque aparecen también atalayas de planta cuadrada como la Torre de Culibre.
            En el ángulo suroeste de los llanos de Magrú, en Purullena, se encuentra la torre de Al-Magruz, que también tiene otras denominaciones como son Atalaya de Magrú, y Magruz.
            La torre de Al-Magruz es de planta circular, de 3,55 metros de diámetro y desarrollo troncocónico. Está construida con calicanto de piedras de tamaño grande y mediano. La argamasa que une las piedras es de color rojizo, muy terrosa. No ha llegado hasta nuestros días ningún resto de su repellado exterior.
            Solo se conservan algo más de 4 metros de su altura original, que corresponde con el tercio inferior, que es macizo. Este tipo de construcción militar árabe, solía medir en torno a los 9,5 metros de altura, siendo sus dos tercios inferiores macizos y el tercio superior hueco, albergando en él una habitación la cual se encontraba cubierta por una bóveda esférica rebajada.
            El hueco de acceso a la torre era una puerta-ventana situada a unos 5 metros de altura. Para llegar hasta ella, se utilizaba una escala elaborada de cuerdas o de madera y que una vez arriba, se retiraba para impedir que el enemigo pudiera acceder a la torre, evitando así que los atalayeros fueran sorprendidos o capturados.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '5',
            'name' => 'Cuevas Al-Magruz',
            'latitude' => '37.3335643',
            'longitude' => '-3.2259956',
            'movilephone' => '',
            'text' => 'En el Centro de Interpretación "Hábitat Troglodita" Almagruz se ofrecen exposiciones, actividades y rutas, cuyo objetivo es acercar el mundo científico a todos los públicos.
            Sus objetivos principales son:
            aprender a identificar, plantearse y resolver interrogantes y problemas relacionados con elementos significativos de su entorno, 
            utilizar estrategias progresivamente más sistemáticas y complejas de búsqueda, almacenamiento y tratamiento de información, 
            de formulación de conjeturas, de puesta a prueba de las mismas y de exploración de soluciones alternativas para conseguir un equilibrio 
            ecológico y de conservación del patrimonio cultural.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '6',
            'name' => 'Campo de tiro con Arco',
            'latitude' => '37.3213288',
            'longitude' => '-3.1866393',
            'movilephone' => '',
            'text' => 'Desde el año 1998 existe en Purullena un Campo de Tiro con Arco, en un principo se fundó para un grupo de amigos como entretenimiento. 
            Debido al gran interes que despertó, se fundó una sociedad llamada "Campo de tiro con arco de Purullena". En los primeros momentos sólo había ocho socios fundadores, que con el tiempo se incrementó hasta alcanzar alrededor de 50 a 60 socios.
            Entretanto  el Campo de Tiro con Arco es uno de los pricipales de España y ha acogido ya dos veces el Campeonato Español de Tiro con Arco 3D.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '7',
            'name' => 'Castillo de Luchena',
            'latitude' => '37.3519176',
            'longitude' => '-3.2000891',
            'movilephone' => '',
            'text' => 'También conocido como Guadix el Viejo, se localizaba en un cerro situado en la ladera Este de los llanos de Magrú, a unos 2.500 metros al Oeste de Benalúa de Guadix, sobre el cortijo de Luchena y cerca de la confluencia de los ríos Fardes y Guadix.
            Este castillo se compone de dos recintos bien diferenciados. Del exterior sólo quedan restos de murallas de 1,35 metros de espesor y de dos torres, todo en el lado Norte y está construido con tapial de tierra muy pobre en cal. En el ángulo Noreste y el lado Este, aparecen restos de muros y zarpas de mampostería enrasados con el terreno que debieron servir de base a otros elementos defensivos de esta cerca. Además, puede reconocerse con facilidad el trazado del perímetro de todo este recinto.
            Al Oeste, una extraña torre de grandes proporciones en forma de V, cierra el recinto y defendía la puerta de acceso al conjunto, conservándose parte del  camino primitivo que llegaba a él. Dicho torreón está formado por dos gruesas murallas, 4,40 y 3,70 metros de anchura, que forman ángulo agudo, adaptándose al terreno y construidas de tapial de cal y canto.
            El recinto principal, situado en la plataforma superior del cerro, tiene su perímetro perfectamente definido y forma un rectángulo. Conserva restos de seis torres y sus muros intermedios, aunque casi todo se encuentra enterrado en sus propios escombros. Sólo son claramente apreciables las torres ubicadas al Noroeste y Suroeste y parte de la muralla que las une, donde debió estar situada la puerta de acceso a este recinto. En algunas zonas, como sucede al Este, existen restos de muro de mampostería por fuera de la línea de muralla, pudiendo corresponder a zarpas de la misma, a torres o a una antemuralla.
            En el interior, en el centro del rectángulo, se sitúa un aljibe enterrado, construido con muros de hormigón de cal y cubierto con bóveda de mampostería. Tiene una anchura interior de 2,40 metros, no pudiéndose medir su longitud por encontrarse su extremo Noroeste enterrado, si bien superaría los 5 metros.
            Junto a esta cisterna existe una edificación rectangular, construida con muros de buen hormigón de 0,65 metros de grueso, no apreciándose en ellos restos de mechinales pero sí de juntas de aparejo en sus ángulos, en su parte superior, lo que dificultaría su utilización como aljibe. Los muros conservan una altura de 1 metro desde la rasante exterior actual, estando su interior e interior al mismo nivel, no viéndose el resto de su pavimento. El muro presenta curvado su coronamiento, así como un gran orificio en su base.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
        DB::table('pointofinterests')->insert([
            'id' => '8',
            'name' => 'Torre de Culibre',
            'latitude' => '',
            'longitude' => '',
            'movilephone' => '',
            'text' => 'Torre atalaya andalusí, de figura prismática y planta rectangular, de medidas 4.65 x 3.30 metros, estando los lados mayores orientados al Norte y Sur. Está construida con un muro perimetral de tapial calicastrado, de 65 centímetros de espesor, macizado interiormente con mampostería. Tiene una altura conservada de 3.40 metros, apreciándose intacto parte del enlucido superficial.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '9',
            'name' => 'Teatro Municipal',
            'latitude' => '37.3145765',
            'longitude' => '-3.1890351',
            'movilephone' => '',
            'text' => 'Inaugurado por el presidente de la Diputación de Granada Sebastián Pérez, el teatro cuenta con 790 metros cuadrados, con capacidad para 1200 personas en pie y 346 con asientos, y una entrada de unos 100 metros. El escenario es de 86 metros cuadrados y el edificio cuenta además con aseos, taquilla, bar, guardarropa, sala de proyecciones y un despacho.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '10',
            'name' => 'Piscina Municipal',
            'latitude' => '37.31913',
            'longitude' => '-3.18309',
            'movilephone' => '',
            'text' => 'Inaugurada en 2010, la Piscina de Purullena se encuentra en un espacio natural de singular belleza rodeada de pinares.
            El recinto cuenta con césped artificial, vestuarios y baños públicos, servicio de Bar y zona chillout.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /*BARES, PUBS y RESTAURANTES (HOSTELERIA) */
        DB::table('pointofinterests')->insert([
            'id' => '20',
            'name' => 'El Royo Café & Copas',
            'latitude' => '37.3175707',
            'longitude' => '-3.1943277',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '21',
            'name' => 'Restaurante Mesón la Taberna',
            'latitude' => '37.317406',
            'longitude' => '-3.1929099',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '22',
            'name' => 'Hostal-Restaurante Ruta del Sur',
            'latitude' => '37.3180833',
            'longitude' => '-3.1943175',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '23',
            'name' => 'Café Bar Parada',
            'latitude' => '37.3180833',
            'longitude' => '-3.1943175',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '24',
            'name' => 'Las Cuatro Hermanas',
            'latitude' => '37.3177648',
            'longitude' => '-3.1938992',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '25',
            'name' => 'Cafetería Fabiola',
            'latitude' => '37.3166406',
            'longitude' => '-3.1908579',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '26',
            'name' => 'Brothers Café Bar Pub',
            'latitude' => '37.3173007',
            'longitude' => '-3.1905241',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '27',
            'name' => 'Pizzería Eclipse',
            'latitude' => '37.3168394',
            'longitude' => '-3.1895305',
            'movilephone' => '',
            'text' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
