<br>
<br>
<div id="map" style="height: 40em; z-index: 1;">
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
            marker.bindPopup('<a target="_blank" href="/pointofinterests/{{ $point->id }}">{{ $point->name }}</a>')
                .openPopup();
        </script>

    </ul>
@endforeach
<br>
<br>
<script>
    var popup = L.popup();
</script>
