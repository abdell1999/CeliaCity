@extends('layouts.frontpage')

@section('scripts')
    <script src="/assets/js/comentarios.js"></script>
@endsection





@section('content')
    <!--pepe-->
    <link rel="stylesheet" type="text/css" href="/assets/css/pointofinterest.css">
    <br>
    <br>
    <br>

    <body>
        <h1 class="text-5xl font-bold leading-tight mt-0 mb-2 text-black-800">{{ $pointofinterests->name }}</h1>
        <section class="contenido" style="display:flex;">

            <!--====== ABOUT PART START ======-->

            <section id="about" class="about_area  pb-50">
                <div class="about_wrapper">
                    <!-- about image -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about_content">
                                    <div class="section_title">
                                        <h3 class="title">Acerca de <br> <span>Numbers</span></h3>
                                        <p>{{ $pointofinterests->text }}</p>
                                    </div> <!-- section title -->

                                </div> <!-- about content -->
                                <!-- about_counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- about wrapper -->
            </section>

            <!--====== ABOUT PART ENDS ======-->
            <!-- Slider start -->
            <div class="slider">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            <div class="swiper-slide">
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
            <!-- Slider end -->
        </section>
        <!-- Map start Bootstrap -->
        <div class="rounded mapita">
            <h2 class="card-title">Localización</h2>
            <div id="map" class="mapa">

                <script type="text/javascript">
                    //Cargando nuestro mapa
                    var mapsipe = L.map('map').
                    setView([37.330822, -2.302065],
                        16); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar
                    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                        maxZoom: 18
                    }).addTo(mapsipe);
                    var marker = L.marker([{{ $pointofinterests->latitude }}, {{ $pointofinterests->longitude }}]).addTo(mapsipe);
                    marker.bindPopup("<b>{{ $pointofinterests->name }}</b>").openPopup();


                    var popup = L.popup();

                    function onMapClick(e) {
                        popup
                            .setLatLng(e.latlng)
                            .setContent("Has pulsado en el mapa en la coordenada " + e.latlng.toString())

                            .openOn(mapsipe);
                    }
                    mapsipe.on('click', onMapClick);
                </script>
            </div>
        </div>
        <!-- Map end Bootstrap -->
        <script>
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


        </div>
        <h2 class="title">Comentarios</h2>


        <!-- PRUEBAS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                            src={{ Auth::user()->photo }} alt="Image Description">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                            <input type="hidden" value="{{ $pointofinterests->id }}" name="id_pointofinterest"
                                id="id_pointofinterest">
                            <div class="g-mb-15">
                                <h5 class="h5 g-color-gray-dark-v1 mb-2">{{ Auth::user()->name }}</h5>

                            </div>

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                            <ul class="list-inline d-sm-flex my-0">

                                <li class="list-inline-item ml-auto">
                                    <a class="g-color-black  g-color-primary--hover" class="btn btn-primary"
                                        id="btnComentar" href="#!">
                                        Enviar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="comentariosPosteados" class="comment-widgets m-b-20">

                    <!--AQUI SE CARGAN LOS COMENTARIOS -->
                </div>
            </div>
        </div>





        </div>
        </div>
        </div>
    </body>

    </html>






@endsection
