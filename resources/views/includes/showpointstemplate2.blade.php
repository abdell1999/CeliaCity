<!-- Main -->
<article id="main">

    <section class="wrapper style5">
        <div class="inner">

            <h2>{!! $pointofinterests->name !!}</h2>

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


            </div>
        </div>









        </div>
    </section>
</article>
