@extends('layouts.frontlayout')

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="/assets/js/guide.js"></script>

@endsection

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
        <h3>Lugares para visitar</h3>
        @foreach ($pointofinterests as $point)
        <ul class="pt-10">
            <li><p class="point" data-guide="{{$point['id']}}">{!!$point['name']!!}</p></li>
        </ul>
        @endforeach
      </div>

    </div>
  </div>

  <div class="container mt-100 pt-20">
    <div class="row justify-content-center mt-20 pb-20">
      <div class="col-md-6">
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

      <div class="col-md-6 text-center pt-30">
      <div class="about_content">
                        <div class="section_title">
                            <!--Aquí entra el AJAX-->
                        </div> <!-- section title -->
                    </div> <!-- about content -->
                    <!-- about_counter -->
      </div>

    </div>
  </div>

  <script type="text/javascript">
    //Cargando nuestro mapa
    /*
    var mapsipe = L.map('map').
    setView([37.330822, -2.302065],
        16); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(mapsipe);
    */


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
