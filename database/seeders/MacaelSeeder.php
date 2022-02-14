<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MacaelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pointofinterests')->insert([
            'id' => '100',
            'name' => 'Fuentes de los leones - Plaza de la Constitución.',
            'latitude' => '37.332719',
            'longitude' => '-2.304780',
            'text' => 'Es la plaza más destacada de la Villa de Macael, construida en 1980 y reformada en 2015, se
            sitúa en el centro del pueblo. Resaltan las diversas casas señoriales de principios de siglo y el
            Ayuntamiento Viejo con su escudo nobiliario en la fachada principal. Desde el día 13 de Junio de
            2015 cuenta en su extremo norte con una réplica exacta de la Fuente de los Leones de la
            Alhambra de Granada, tallada en mármol blanco Macael por artesanos del municipio.',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([

            'id' => '101',
            'name' => 'Centro de interpretación del mármol.',
            'latitude' => '37.333676',
            'longitude' => '-2.303050',
            'movilephone' => '950128916',
            'text' => 'El Centro de Interpretación del Mármol de Macael cuenta con una superficie de 250 m2 donde
            se hace un recorrido por la historia de Macael hasta nuestros días.
            Una industria viva con más de 25 siglos de historia. Ven a Macael para visitar sus canteras y
            conocer sus artesanos, los cuales gozan de un prestigio mundialmente reconocido. Muestra de
            ello es la reciente declaración de la comarca del Valle del Almanzora de interés artesanal por la
            Junta de Andalucia.
            En el interior del Centro de Interpretación del Mármol de Macael podemos encontrar en 22
            paneles con información en ingles y español herramientas antiguas, piezas arqueológicas,
            maquetas, fotografías, un espacio dedicado a la geología de la zona, aspectos de la
            restauración ecológica-paisajística de las escombreras e incluso una réplica de dos de los
            leones del Patio de los Leones de la Alhambra de Granada. Dispone de una sala de vídeo y una
            pequeña tienda de artículos de mármol.
            Las visitas al centro son autoguiadas y contarán con la explicación de un guía para un mínimo
            de 15 personas.
            Además, desde el mismo centro de interpretación se organizan visitas guiadas a las canteras y
            talleres de artesanía.',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([

            'id' => '102',
            'name' => 'El mortero más grande del mundo.',
            'latitude' => '37.335494',
            'longitude' => '-2.301543',
            'text' => 'El mortero de mármol Blanco Macael más grande del mundo
            Monumental pieza de 50.000 kilos que se sostiene sobre una lámina de mármol blanco entre la
            Avenida Andalucía y la Avenida de Ronda de la localidad. Esta pieza imita a la perfección un
            mortero clásico hecho en mármol, de forma que el instrumento que se utiliza para machacar los
            ingredientes conocido como mano se realizará en mármol Amarillo Macael.
            En su elaboración participaron las empresas Grupo Cosentino y Pimar Stone, que han cedido el
            material con el que se ha elaborado. Asimismo, Arriaga Artesanos del Mármol esculpió esta obra
            que está valorada en cerca de 300.000 euros y por la que, finalmente, el Consistorio abonará
            unos 25.000 euros gracias a los colaboradores.
            ',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '103',
            'name' => 'Monumento a la Virgen del Rosario',
            'latitude' => '37.332527',
            'longitude' => '-2.304583',
            'text' => 'Precioso monumento a la Virgen del Rosario, patrona de Macael, realizado en azulejos
            sevillanos y enmarcado en un friso de mármol blanco. Ubicado junto a la iglesia.',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '104',
            'name' => 'Monumento Cantera Alma.',
            'latitude' => '37.332579',
            'longitude' => '-2.304061',
            'text' => 'Monumento modernista realizado en mármol Blanco, Gris y Amarillo Macael por artesanos del
            municipio.
            Está ubicado en pleno centro de la localidad, en la Calle Placetas.
            Representa la salida del mármol de las entrañas de la naturaleza y su ofrecimiento al pueblo de
            Macael.',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '105',
            'name' => 'Monumento entrada de Macael.',
            'latitude' => '37.340184',
            'longitude' => '-2.296529',
            'text' => 'Monumento de grandes dimensiones con el nombre y escudo del municipio con el objetivo de
            dar la bienvenida a todos los visitantes.
            Se encuentra situado a la entrada sur, está realizado en Blanco, Gris y Amarillo Macael, los tres
            colores característicos de nuestra sierra.',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '106',
            'name' => 'Monumento al cantero.',
            'latitude' => '37.334551',
            'longitude' => '-2.301881',
            'text' => 'Ascendiendo por la calle García Lorca y tras dejar la plaza Almería, con su airosa y original
            fuente, nos encontramos con el Monumento al cantero. Escultura conmemorativa esculpida
            sobre una “masa” de mármol blanco, que expresa con orgullo el busto de un trabajador que
            arranca cada día latidos a la sierra noble y fuerte.',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '107',
            'name' => 'Mirador de la Virgen del Rosario.',
            'latitude' => '37.335575',
            'longitude' => '-2.299744',
            'text' => 'Se sitúa en la cima de un pequeño montículo coronado por la Virgen del Rosario; escultura de
            unos 3 metros de altura, realizada por D. José Sabiote Fernández, en el más puro y blanco
            mármol de Macael. Allí, desde su altura impasible vigila y cuida a los macaelenses,con sus
            espectaculares vistas a Macael, Valle del Almanzora, Sierra de los Filabres, Sierras de María y
            Los Vélez, entre otras.
            El camino por el que se accede y la explanada donde se ubica la sagrada imagen fueron
            realizados de forma altruista con devoción por los ciudadanos de la villa.
            La subida de pizarra y baranda de madera, serpentea la montaña entre romero y tomillo. De vez
            en cuando los bancos ayudan al caminante a disfrutar del paisaje, adornado con numerosas
            esculturas',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '108',
            'name' => 'Mirador de las canteras.',
            'latitude' => '37.305460',
            'longitude' => '-2.285266',
            'text' => 'Mirador de las Canteras realizado por el Ayuntamiento de Macael y la Mancomunidad de
            Municipios Valle del Almanzora.',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '109',
            'name' => 'Calles y porches.',
            'latitude' => '37.333228',
            'longitude' => '-2.305022',
            'text' => 'Las calles dan identidad a un pueblo, por ellas fluyen transeúntes y son un devenir de gentes
            que pasan sin prestar demasiada atención a sus rincones más significativos.
            Así, en sus barrios más ancestrales se encuentran pequeños porches y callejones estrechos y
            sinuosos; recordándonos que un pueblo, los musulmanes, pasaron por aquí.
            La más antigua y típica es la calle Porche que conserva su cubierta original de pizarra,
            soportada por maderos de pino carrasco. El más utilizado y largo es el porche de la calle
            Picasso, cubierto con bóveda de medio cañón, que da acceso al Ayuntamiento.
            ',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([

            'id' => '110',
            'name' => 'Iglesia Parroquial Santa Maria Del Rosario.',
            'latitude' => '37.332591',
            'longitude' => '-2.304357',
            'movilephone' => '950445211',
            'text' => 'En 1609 fue inaugurada la Iglesia Parroquial Santa María del Rosario, en estilo Mudéjar. La
            mandó construir el entonces Obispo de Almería D. Fray Juan de Portocarrero, de esta época se
            conserva la torre y el escudo episcopal.
            La torre, de aspecto majestuoso y en buen estado de conservación, está coronada por el
            campanario. Al exterior presenta una cubierta a cuatro aguas con teja árabe y al interior un
            artesonado de madera en el primero y segundo cuerpo.
            Su decoración se realiza a base de ladrillos alternados con cajones de mampostería, arcos de
            medio punto y dibujos geométricos acusados por el ladrillo saliente de sus muros.
            Desde sus orígenes hasta nuestros días la iglesia ha sufrido numerosas modificaciones en su
            estructura, así el espacio interior es diáfano y amplio, al presentar una sola nave, llamando la
            atención sus portadas laterales, inusuales en las iglesias de la comarca y ello es debido a la
            última restauración efectuada en 1992 en la que se cegó la portada principal, para colocar en su
            lugar el Altar Mayor.
            El Altar Mayor presenta una decoración marmórea de variadas tonalidades, donde lo más
            destacado es el templete que proyecta en su interior el sagrario, bellamente realizado y tallado
            por los artesanos “Hijos de José Sabiote Navarro”.
            Lo más destacado de la Iglesia, además de su torre, son las tallas del Cristo Yacente; el niño
            que sustenta la Virgen del Rosario, ambas del siglo XVII, salvadas de la quema masiva de
            Santos efectuada en la Guerra Civil y el valioso óleo de la Purísima Concepción procedente de
            la escuela de Juan de Juanes.',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([
            'id' => '111',
            'name' => 'Las Canteras.',
            'latitude' => '37.305466',
            'longitude' => '-2.279304',
            'text' => 'Macael y su zona de influencia en el corazón de la Sierra de los Filares, aporta el principal
            ejemplo de vigor y dinamismo empresarial de esta industria, extractora y transformadora del
            mármol y rocas afines, constituyendo a su vez uno de los mejores sistemas productivos de
            empresas especializadas en el sector de Andalucía.
            La concentración de 300 empresas dedicadas a las tareas extractivas y transformadoras de
            mármoles en un mismo espacio comarcal facilita el diseño y eficacia de cualquier estrategia de
            competitividad.',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '112',
            'name' => 'Bar la Plaza.',
            'latitude' => '37.332412',
            'longitude' => '-2.304413',
            'movilephone' => '622159919',
            'text' => 'Horario: De 10 horas a cierre. Cerramos Lunes por la mañana y abierto por la tarde.

            Tenemos Carne a la Brasa, Pizzas Caseras en horno de leña, especialidad en Patatas Bravas y todo tipo de Comidas Caseras como Puchero Trigo, Gachas Torcias, Fabada, Migas.

            Amplia gama de Pescado y Marisco, Jibia, Calamares, Quiquilla, Mero, Atún, Berberechos,....

            Todos los Domingos, Arroz con Habichuelas, Surtido de Brochetas, Pisto Casero, Pisto Casero, Cherigans, Tostada de Ahumados.

            En Navidad, degusta nuestros Roscos de Anis y Mantecados Caseros, amplio Surtido de Postres, Asados de Carrileras por encargo',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([
            'id' => '113',
            'name' => 'Bar la Higuera.',
            'latitude' => '37.332318',
            'longitude' => '-2.300643',
            'movilephone' => '667894747',
            'text' => 'Capacidad: 180 personas aproximadamente.

            Horarios: lunes a sábado: 06:15 horas al cierre/ Y Domingos: 07:00 a 12:00 horas

            Especialidad: Tapas caseras y variadas.

            Lunes a viernes menú.  ',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '114',
            'name' => 'Taberna McCoy.',
            'latitude' => '37.333968',
            'longitude' => '-2.302276',
            'movilephone' => '610768472',
            'text' => '
            Taberna McCoy es un local decorado en madera y antiguedades recreando el mejor estilo de taberna irlandesa. Si estas cansado de estar siempre en los mismo bares y que sean todos iguales, visita nuestra taberna y prueba la gran variedad de tapas que tenemos a tu disposición.
            Capacidad: 89 personas
            Horario: Abrimos de martes a viernes de las 9 de la mañana a las 5 de la tarde y de las 7 de la tarde al cierre. Los fines de semana y festivos estamos abiertos todo el día.',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '115',
            'name' => 'Bar la Bodeguilla.',
            'latitude' => '37.329849',
            'longitude' => '-2.303281',
            'movilephone' => '654843244',
            'text' => 'Capacidad: 50 personas
            Horarios: lunes a sábado: 08:00 al cierre
            Especialidad: Tapas variadas; careta en salsa, caracoles, riñones a la plancha',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '116',
            'name' => 'Cafetería Bulevar',
            'latitude' => '37.330221',
            'longitude' => '-2.307045',
            'movilephone' => '647 85 02 61',
            'text' => 'Horario:
            lunes	8:15 24:00
            martes	8:15 24:00
            miércoles	8:15 24:00
            jueves	8:15 24:00
            viernes	8:15 24:00
            sábado	8:15 24:00
            domingo	Cerrado
            ',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([
            'id' => '117',
            'name' => 'Heladería Martinez.',
            'latitude' => '37.33294309152797',
            'longitude' => '-2.30426940959901',
            'movilephone' => '950128177',
            'text' => 'Heladeria de loz hermanos martinez durante generaciones sirviendo los mejores helados de Macael',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '118',
            'name' => 'Hotel Cero Ocho.',
            'latitude' => '37.338353803728786',
            'longitude' => '-2.3014489699622116',
            'movilephone' => '619199640',
            'text' => 'Contamos con Wifi gratis, aire acondicionado y baño privado en todas nuestras habitaciones, así como todo tipo de comodidades para que no te falte de nada decoradas con sencillez pero transmitiendo calidez y personalidad.
            ¡Ven a Hotel Cero Ocho y siéntete como en casa!',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '119',
            'name' => 'Restaurante Los Membrives.',
            'latitude' => '37.336444439324424',
            'longitude' => '-2.300612631335737',
            'movilephone' => '950128491',
            'text' => 'Disfruta de la buena cocina, de la calidad y el buen servicio, en Restaurante Los Membrives.
            Celebra con nosotros bodas, comuniones, bautizos, reuniones de empresa o cualquier otro tipo de evento
            lunes:
                                8:30-0:00
                                martes:
                                8:30-0:00
                                miércoles:
                                8:30-0:00
                                jueves:
                                8:30-0:00
                                viernes:
                                8:30-0:00
                                sábado:
                                8:30-0:00
                                domingo:
                                8:30-0:0',
            'created_at' => now(),
            'updated_at' => now()

        ]);



        DB::table('pointofinterests')->insert([
            'id' => '120',
            'name' => 'Bar Restaurante las Piscinas.',
            'latitude' => '37.33838309843461',
            'longitude' => '-2.301214739843711',
            'movilephone' => '681664790',
            'text' => 'Restaurante en el recinto municipal de la piscina de Macael disponemos de gran variedad de platos en la cartana
            ',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '121',
            'name' => 'Pizzeria Francis.',
            'latitude' => '37.326985',
            'longitude' => '-2.304592',
            'movilephone' => '608079093',
            'text' => 'Macael y su zona de influencia en el corazón de la Sierra de los Filares, aporta el principal
            ejemplo de vigor y dinamismo empresarial de esta industria, extractora y transformadora del
            mármol y rocas afines, constituyendo a su vez uno de los mejores sistemas productivos de
            empresas especializadas en el sector de Andalucía.
            La concentración de 300 empresas dedicadas a las tareas extractivas y transformadoras de
            mármoles en un mismo espacio comarcal facilita el diseño y eficacia de cualquier estrategia de
            competitividad.',
            'created_at' => now(),
            'updated_at' => now()

        ]);



        DB::table('pointofinterests')->insert([
            'id' => '122',
            'name' => 'Restaurante las Carmelas.',
            'latitude' => '37.335723',
            'longitude' => '-2.291574',
            'movilephone' => '649818708',
            'text' => 'Capacidad: 100 personas
            Horarios: lunes a domingo: 07:00 al cierre
            Especialidad: Menú diario.',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '123',
            'name' => 'Bocatería-Cafetería Calle Larga.',
            'latitude' => '37.333699',
            'longitude' => '-2.303320',
            'movilephone' => '649251011',
            'text' => 'Capacidad: 60 personas
            Horario:
            Lunes a viernes 09:00 a 13:00 / 17.00 a 24.00  Sábados y domingos: 09:00 a 24:00
            Especialidad en nuestros bocadillos XXXL, roscas, papas, menús infantiles, copas.',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('pointofinterests')->insert([
            'id' => '124',
            'name' => '
            Escuela Restaurante las Canteras.',
            'latitude' => '37.30245390396827',
            'longitude' => '-2.2802426693132496',
            'movilephone' => '655026784',
            'text' => 'Te invitamos a que conozcas nuestra escuela de gastronomia en Macael, donde podras disfrutar de la mejor comidas para tus celebraciones, congresos de empresas...disponemos de local climatizado y medios audiovisuales. Creamos un nuevo concepto de restauración que se une la capacitación de nuevos profesionales. El servicio más exquisito y exclusivo, en un entorno único.
            Capacidad: 250 a 300 personas
            Horarios: Lunes a Viernes 9:00 a 17:00
                            Sábado: cerrado (excepto reservas)
                            Domingo: 11:00 al cierre
            Especialidad: Celebraciones y menú diario.',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('pointofinterests')->insert([
            'id' => '125',
            'name' => 'Restaurante El Torero.',
            'latitude' => '37.33463827771849',
            'longitude' => '-2.287754263224406',
            'movilephone' => '950128916',
            'text' => 'Ven con tus amigos a Restaurante El Torero en Macael y saborea nuestras ricas tapas:
            -Saquito de Salmón y Mango
            -Tosta de Secreto con Cebolla caramelizada
            -Solomillo con Huevo de Codorniz
            -Etc..

            Capacidad: 100 personas

            Horarios: lunes a sábado 07:00 al cierre
            domingo: descanso

            Especialidad: Desayunos, comidas, tapas variadas
            WI-FI gratuita.',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pointofinterests')->insert([
            'id' => '126',
            'name' => 'Consigliere.',
            'latitude' => '37.334932615828265',
            'longitude' => '-2.3014499178433407',
            'movilephone' => '680782244',
            'text' => 'Consigliere CW&C ofrece el mejor servicio y calidad a todos sus clientes
            Un nuevo concepto de elaborar tus combinados
            Nos diferencia el cariño con el que tratamos nuestros productos.',
            'created_at' => now(),
            'updated_at' => now()

        ]);




    }
}
