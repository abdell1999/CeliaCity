@extends('layouts.frontlayout')

@section('content')
<style>
    h1, h3, li {
        font-family: cursive;
    }
</style>
<div class="container mt-100 pt-20">
    <h1 class="text-5xl font-bold leading-tight mt-0 mb-2 text-black-600">Guia Turistica Purullena</h1>
    <div class="row justify-content-center mt-20 pb-20">
      <div class="col-md-6">
        <div class="rounded-lg bg-light shadow-lg shadow-2xl">
            <div id="map" class="" style="height: 40em;">
            </div>
        </div>
      </div>

      <div class="col-md-6 text-center pt-30">
        <h3>Itinerario 1</h3>
        <ul class="pt-10">
            <li>Cuesta del Negro</li>
            <li>Iglesia Parroqual</li>
            <li>Museo troglodita</li>
            <li>La torre de Magru</li>
        </ul>
        <h3 class="pt-10">Itinerario 2</h3>
        <ul class="pt-10">
            <li>Cuevas Almagruz</li>
            <li>Badlands de Purullena</li>
            <li>Carcavas del Marchal</li>
            <li>Mirador del Fin del Mundo</li>
        </ul>
        <h3 class="pt-10">Itinerario 3</h3>
        <ul class="pt-10">
            <li>Campo de tiro con Arco de Purullena</li>
            <li>Torre de Culiebre</li>
            <li>Cueva de los Algarbes de Tablar</li>
        </ul>
      </div>

    </div>
  </div>

  <div class="container mt-100 pt-20">
    <div class="row justify-content-center mt-20 pb-20">
      <div class="col-md-6">
      <div class="slider">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            <div class="swiper-slide shadow-lg rounded">
                                <img src="{{ url($resource->route) }}" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            <div class="swiper-slide">
                                <img src="{{ url($resource->route) }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Imagen grande-->
            </div>
        </div>

      <div class="col-md-6 text-center pt-30">
      <div class="about_content">
                        <div class="section_title">
                            <h3 class="title"> <span>Purullena</span></h3>
                            <p>Purullena destaca por su gran cantidad de casas cueva y por ser un pueblo eminentemente agrícola y artesanal. Es famoso por su cerámica decorada con azul cobalto con la técnica del reflejo policromado, cuya tradición se remonta al siglo XVI y cuyas piezas se exponen y venden en tiendas cueva. “Una villa alucinante”, en palabras del historiador Carlos Asenjo Sedano, “que permanece ‘colgada’ de las arcillas de las cárcavas que se ofrecen en infinidad de pinguruchos desconcertantes” y en cuyas viviendas subterráneas dice la leyenda que se refugiaba el célebre bandolero José María ’El Tempranillo’.</p>
                        </div> <!-- section title -->
                    </div> <!-- about content -->
                    <!-- about_counter -->
      </div>

    </div>
  </div>

  <script type="text/javascript">
    //Cargando nuestro mapa
    var mapsipe = L.map('map').
    setView([37.330822, -2.302065],
        16); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(mapsipe);


    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("Has pulsado en el mapa en la coordenada " + e.latlng.toString())

            .openOn(mapsipe);
    }
    mapsipe.on('click', onMapClick);
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

@endsection
