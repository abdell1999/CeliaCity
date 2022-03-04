@extends('layouts.frontpage')

@section('scripts')
    <script src="/assets/js/comentarios.js"></script>
    <script src="/assets/js/pointofinterests.js"></script>
@endsection


@section('content')
<!-- Start Modal Delete Comment -->
  <!-- Modal -->
  <div class="modal fade" id="deleteComment" tabindex="-1" role="dialog" aria-labelledby="deleteCommentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteCommentLabel">Borrar Comentario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Seguro que quieres borrar este comentario?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary delete_comment">Borrar</button>
          <input type="hidden" id="deleteing_id">
        </div>
      </div>
    </div>
  </div>
    <!-- End Modal Delete Commnet -->
    <!-- Start Modal Edit Comment -->
    <div class="modal fade" id="editComment" tabindex="-1" role="dialog" aria-labelledby="editCommentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editCommentLabel">Editar Comentario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="comment_id" value="" />
                <input type="text" class="edit_text">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary update_comment">Editar Comentario</button>
            </div>
          </div>
        </div>
      </div>
    <!-- End Modal Edit Comment -->
    <!--pepe-->
    <link rel="stylesheet" type="text/css" href="/assets/css/pointofinterest.css">
    <body>
        <section class="contenido" style="display:flex;">

            <!--====== ABOUT PART START ======-->

            <section id="about" class="about_area">
                <div class="about_wrapper">
                    <!-- about image -->
                    <div class="container">
                        @if($resources->isEmpty())
                        <div class="row justify-content-center">
                        @else
                        <div class="row">
                        @endif
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
            @if($resources->isNotEmpty())
            <div class="slider">
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
            @endif
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

            @if($resources->isEmpty())
            <div class="container mb-20" align="center">
            @else
            <div class="container mb-20">
            @endif
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
                                    <a class="page-scroll" href="#" data-toggle="modal" data-target="#loginModal">Iniciar Sesión</a>
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
        <div class="modal fade" id="zoomImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="slider zoom" style="position:fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper2">
                <button class="btn-closeModal border-0 bg-transparent d-flex flex-row-reverse w-100" id="btn-closeModal"><i class="far fa-times-circle text-warning btn-lg m-0 p-0" id="eeee"></i></button>
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
        @if ($resources)

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
@endif
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

        <script>
            document.getElementById("btn-closeModal").addEventListener('click', () => {
                $('#zoomImage').hide();
                $('.modal-backdrop').hide();
            })

        </script>

    </body>

    </html>






@endsection
