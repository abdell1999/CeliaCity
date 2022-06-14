<!-- Main -->
<article id="main">

    <section class="wrapper style5">
        <div class="inner">

            <h2>{!! $pointofinterests->name !!}</h2>

            @if($resources->isNotEmpty())
            <div class="slider">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            @if (substr($resource->route, strpos($resource->route, ".") + 1) === 'png' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpg' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpeg')

                                    <div class="swiper-slide shadow-lg rounded">

                                        <img src="{{ url($resource->route) }}" style="width: 100%; height: 100%;">

                                    </div>
                                @else
                                    <div class="swiper-slide shadow-lg rounded">

                                        <video muted controls preload disablepictureinpicture style="width: 100%; height: 100%;">
                                            <source src="{{ url($resource->route) }}" type="video/{{substr($resource->route, strpos($resource->route, ".") + 1)}}">
                                        </video>
                                    </div>

                                @endif
                            @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            @if (substr($resource->route, strpos($resource->route, ".") + 1) === 'png' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpg' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpeg')

                                    <div class="swiper-slide">

                                        <img src="{{ url($resource->route) }}" style="width: 100%; height: 100%;">

                                    </div>
                                @else
                                    <div class="swiper-slide">

                                        <video muted disablepictureinpicture style="width: 100%; height: 100%;">
                                            <source src="{{ url($resource->route) }}" type="video/{{substr($resource->route, strpos($resource->route, ".") + 1)}}">
                                        </video>
                                    </div>

                                @endif
                            @endforeach
                    </div>
                </div>
                <!-- Imagen grande-->
            </div>
            @endif

            <p>{{ $pointofinterests->text }}</p>
            <hr />

            <div id="map" class="map"></div>






            <script type="text/javascript">
                //Cargando nuestro mapa
                var mapsipe = L.map('map').
                setView([{{ $pointofinterests->latitude }}, {{ $pointofinterests->longitude }}],
                    16); //[] es la latitud y longitud de la zona que queremos mostrar
                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',

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
            <style>
                #map {
                    width: 100%;
                    height: 400px;
                    box-shadow: 5px 5px 5px #888;
                }

            </style>















            <hr />

            <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                    @php
                        $numeroDeimagen = 1;

                    @endphp

                    @if ($resources->isNotEmpty())


                        @foreach ($resources as $resource)
                            @if ($numeroDeimagen == 1)
                                <div class="col-12">
                                    <span class="image fit"><img src="{{ $resource->route }}" alt="">
                                    </span>
                                </div>
                                @php
                                    $numeroDeimagen = 2;

                                @endphp
                            @else
                                <div class="col-4">
                                    <span class="image fit"><img src="{{ $resource->route }}" alt="">
                                    </span>
                                </div>
                            @endif
                        @endforeach

                    @endif

                </div>

                <hr>
                <br>
                <br>


                <div class="col-12">
                    <textarea name="text" id="text" placeholder="Introduce un comentario" rows="6"></textarea>
                    @if (@Auth::user())
                        <button class="primary mt-2" type="submit" id="btnComentar" href="#!">
                            Enviar
                        </button>
                    @else
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#loginModal">Iniciar
                            Sesión</a>
                    @endif
                </div>





                <input type="hidden" id="template" value="2">
                <input type="hidden" value="{{ $pointofinterests->id }}" name="id_pointofinterest"
                    id="id_pointofinterest">
                <div id="comentariosPosteados" class="comment-widgets m-b-20">


                </div>

            </div>
        </div>








        </div>
    </section>
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
</article>
