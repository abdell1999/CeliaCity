@extends('layouts.frontpage')

@section('scripts')
<script scr="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                      @foreach($resources as $resource)
                        <div class="swiper-slide">
                            <img src="{{url($resource->route)}}" />
                        </div>
                        @endforeach
                      </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                    @foreach($resources as $resource)
                        <div class="swiper-slide">
                            <img src="{{url($resource->route)}}" />
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
        <!-- Comentario sin postear -->
        <div class="card">
            <div class="card-body">
        <div class="comment-widgets m-b-20">
            <div class="d-flex flex-row comment-row">
                <div class="p-2"><span class="round"><img src="{{ Auth::user()->photo }}" alt="user" width="50"></span></div>
                <div class="comment-text w-100">
                    <h5>{{ Auth::user()->name }}</h5>
                    <div class="comment-footer"> <span class="date">March 13, 2020</span>  </div>
                    <input type="hidden" value="{{ $pointofinterests->id }}" name="id_pointofinterest"
                            id="id_pointofinterest">
                            <textarea class="form-control" placeholder="Escribe tu comentario aqui..." name="text" id="text" rows="3"></textarea>
                            <button type="button" class="btn btn-primary" id="btnComentar">Enviar</button>
                </div>
            </div>
        </div>

                </div>
            </div>

<!-- PRUEBAS -->
<div class="container d-flex justify-content-center mt-100 mb-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Comments</h4>
                    <h6 class="card-subtitle">Latest Comments section by users</h6>
                </div>
                <div class="comment-widgets m-b-20">
                    <div class="d-flex flex-row comment-row">
                        <div class="p-2"><span class="round"><img src="https://i.imgur.com/uIgDDDd.jpg" alt="user" width="50"></span></div>
                        <div class="comment-text w-100">
                            <h5>Samso Nagaro</h5>
                            <div class="comment-footer"> <span class="date">April 14, 2019</span> <span class="label label-info">Pending</span> <span class="action-icons"> <a href="#" data-abc="true"><i class="fa fa-pencil"></i></a> <a href="#" data-abc="true"><i class="fa fa-rotate-right"></i></a> <a href="#" data-abc="true"><i class="fa fa-heart"></i></a> </span> </div>
                            <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- PRUEBAS -->
        <div id="comentariosPosteados" class="comment-widgets m-b-20">


        </div>
        </div>
        </div>
    </body>

    </html>






@endsection
