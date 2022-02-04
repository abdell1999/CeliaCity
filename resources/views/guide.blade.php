@extends('layouts.frontlayout')

@section('content')

<div class="container pt-130">
    <h1 class="text-5xl font-bold leading-tight mt-0 mb-2 text-black-600">Guia Turistica Purullena</h1>
    <div class="row justify-content-center pt-50">

      <div class="col-md-6">
        <div class="rounded-lg shadow-2xl">
            <div id="map" class="mapa" style="height: 40em;">

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
            </div>
        </div>
      </div>

      <div class="col-md-6 text-center">
        <h3>Itinerario 1</h3>
        <ul class="pt-10">
            <li>Cuesta del Negro</li>
            <li>Iglesia Parroqual</li>
            <li>Museo troglodita</li>
            <li>La torre de Magru</li>
        </ul>
        <h3>Itinerario 2</h3>
        <ul class="pt-10">
            <li>Cuevas Almagruz</li>
            <li>Badlands de Purullena</li>
            <li>Carcavas del Marchal</li>
            <li>Mirador del Fin del Mundo</li>
        </ul>
        <h3 class="pt-10">Itinerario 3</h3>
        <ul>
            <li>Campo de tiro con Arco de Purullena</li>
            <li>Torre de Culiebre</li>
            <li>Cueva de los Algarbes de Tablar</li>
        </ul>
      </div>

    </div>
  </div>

@endsection
