 <!--Cambiado para que se vea los colores naranjas Mira si os gusta quitando lugares para visitar y dejando en medio guía turística purullena-->
 <style>
    h2,
    li {
        color: #eec41e;
    }

    .point {
        cursor: pointer;
    }

</style>

<div class="container mt-100 pt-20">
    <h2 class="text-5xl font-bold leading-tight mt-0 mb-2 text-center">Historia de Purullena</h2>
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.rutasconhijos.es/wp-content/uploads/2015/09/trogloditas2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.rutasconhijos.es/wp-content/uploads/2015/09/trogloditas3-800x420.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.rutasconhijos.es/wp-content/uploads/2015/09/trogloditas4-800x420.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>

<p>
La historia de Purullena se remonta al año 1800 a.C. aproximadamente, según los estudios arqueológicos de la Cuesta del Negro. En este yacimiento se encuentra un recinto fortificado y una necrópolis con ajuar funerario, así como un asentamiento perteneciente a la Edad del Bronce.

Del paso de los romanos y los árabes por la localidad no ha quedado más huella que unas epigrafías romanas con el nombre del pueblo. La zona contaba con unas torres defensivas que se construyeron en la época andalusí sobre el río Fardes para impedir la penetración de los caballeros cristianos acampados en Jaén. Esta frontera tuvo un especial protagonismo durante la última etapa islámica, la del Reino nazarí de Granada, hasta que cayó en manos de los Reyes Católicos en 1489 y fue cedida a ''Don'' Juan de Benavides.

Poco después pasó a ser una pedanía perteneciente a Marchal. Ya en el siglo XVI recibió el título de Villa Real, que todavía luce en su título municipal. En 1627, S.M. el Rey Felipe IV concedería el título nobiliario de Marquesa de Villa Real de Purullena a ''Doña'' María de Benavides de la Cueva y Sandoval, hija del I Marqués de Jabalquinto.
</p>
<br>
<br>
    <h2 class="text-5xl font-bold leading-tight mt-0 mb-2 text-center">Guía Turística Purullena</h2>
    <div class="row mt-20 pb-20">
        <div class="col-md-4 text-center bg-dark">
            <h3 class="text-white pt-20 pb-20">Lugares para visitar</h3>
            @foreach ($pointofinterests as $point)
                <ul class="pt-10">
                    <li>
                        <p class="point" style="color: #eec41e;" data-guide="{{ $point['id'] }}">
                            {!! $point['name'] !!}</p>
                    </li>

                </ul>
            @endforeach
        </div>
        <div class="col-md-8" style="padding-right: 0 !important; padding-left: 0 !important;">
            <div class="">
                <div id="map" class="" style="height: 40em; z-index: 1;">
                </div>
            </div>
        </div>


    </div>
</div>


<div class="container mt-100 pt-20">
    <div class="row justify-content-center mt-20 pb-20">
        <!--Cambiado slider y texto de sitio para que se vea antes texto que slider -->
        <div class="col-md-6 text-center">
            <div class="about_content">
                <div class="section_title new_section">
                    <!--Aquí entra el AJAX-->
                </div> <!-- section title -->
            </div> <!-- about content -->
            <!-- about_counter -->
        </div>
        <div class="col-md-6 pt-50">
            <div class="slider">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    <div class="swiper-wrapper">
                        <!--Aquí entra AJAX-->
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!--Aquí entra AJAX-->
                    </div>
                </div>
                <!-- Imagen grande-->
            </div>
        </div>
    </div>




    <script type="text/javascript">
        //Cargando nuestro mapa
        var mapsipe = L.map('map').
        setView([37.330355, -2.302759],
            12); //[] es la latitud y longitud de la zona que queremos mostrar
        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',

        }).addTo(mapsipe);
    </script>
    @foreach ($pointofinterests as $point)
        <ul class="pt-10">
            <script>
                var marker = L.marker([{{ $point->latitude }}, {{ $point->longitude }}]).addTo(mapsipe);
                marker.bindPopup('<a target="_blank" href="/pointofinterests/{{ $point->id }}"><b>{{ $point->name }}</b></a>')
                    .openPopup();
            </script>

        </ul>
    @endforeach

    <script>
        var popup = L.popup();
    </script>

    <script type="text/javascript">
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>











