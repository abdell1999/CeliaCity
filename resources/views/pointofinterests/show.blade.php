@extends('layouts.frontpage')

@section('scripts')
    <script src="/assets/js/comentarios.js"></script>
@endsection


@section('content')
    <!--pepe-->
    <link rel="stylesheet" type="text/css" href="/assets/css/pointofinterest.css">
    <body>
        <section class="contenido" style="display:flex;">

            <!--====== ABOUT PART START ======-->

            <section id="about" class="about_area">
                <div class="about_wrapper">
                    <!-- about image -->
                    <div class="container">
                        <div class="row">
                            <!--Cambiado col-lg-9 a xl-9 -->
                            <div class="col-xl-9 bg-light rounded shadow-lg">
                                <div class="about_content m-3">
                                    <div class="section_title">
                                        <h3 class="title"><span>{!!$pointofinterests->name !!}</span></h3>
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
            <div class="slider"">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            <div class="swiper-slide shadow-lg rounded">
                                <img src="{{ url($resource->route) }}" href="#" data-toggle="modal" data-target="#zoomImage"/>
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
        <div class="rounded shadow-lg container bg-light mt-60 pb-20">
            <h2 class="card-title pt-20" style="color: #EEC41E;">Localización</h2>
            <div id="map" class="mapa">
            </div>
        </div>
        <!-- PRUEBAS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <div class="container mb-20">
            <h2 class="mt-20" style="color: #EEC41E;">Opiniones</h2>
            <div>
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">
                        @if(@Auth::user())
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                            src={{ Auth::user()->photo }} alt="Image Description">
                        @endif
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30 shadow-lg rounded">
                            <input type="hidden" value="{{ $pointofinterests->id }}" name="id_pointofinterest"
                                id="id_pointofinterest">
                            <div class="g-mb-15">
                            @if(@Auth::user())
                                <h5 class="h5 g-color-gray-dark-v1 mb-2">{{ Auth::user()->name }}</h5>
                            @endif
                            </div>

                            <textarea class="form-control" id="text" rows="3"></textarea>

                            <ul class="list-inline d-sm-flex my-0">

                                <li class="list-inline-item ml-auto">
                                    @if(@Auth::user())
                                    <a class="g-color-black  g-color-primary--hover" class="btn btn-primary"
                                        id="btnComentar" href="#!">
                                        Enviar
                                    </a>
                                    @else
                                    <a class="page-scroll" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                                    @endif
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


        <!-- MODAL SLIDER-->
        <div class="modal fade" id="zoomImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"" >
        <div class="slider">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff; top: 90%; left: 90%; transform: translate(-25%, -50%);" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            <div class="swiper-slide shadow-lg rounded">

                                <img src="{{ url($resource->route) }}" style="width: 100%; height: 100%;">

                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- Imagen grande-->
            </div>
        </div>
        </div>

        <!--FIN MODAL SLIDER-->
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

        <script type="text/javascript">
            //Cargando nuestro mapa
            var mapsipe = L.map('map').
            setView([{{ $pointofinterests->latitude }}, {{ $pointofinterests->longitude }}],
                16); //[] es la latitud y longitud de la zona que queremos mostrar
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                maxZoom: 18
            }).addTo(mapsipe);
            var marker = L.marker([{{ $pointofinterests->latitude }}, {{ $pointofinterests->longitude }}]).addTo(mapsipe);
            marker.bindPopup('<b>{!! $pointofinterests->name !!}</b>').openPopup();


            var popup = L.popup();

            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent("Has pulsado en el mapa en la coordenada " + e.latlng.toString())

                    .openOn(mapsipe);
            }
            mapsipe.on('click', onMapClick);
        </script>

    </body>

    </html>






@endsection
