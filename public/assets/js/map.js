$(document).ready(function() {


var map = L.map('selectPoint').setView([37.330822, -2.302065],
    16);



L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
maxZoom: 18
}).addTo(map);


L.control.scale().addTo(map);


var marker = L.marker([37.330822, -2.302065],{draggable: true}).addTo(map);





marker.on('dragend', function(event) {
marker = event.target;  // you could also simply access the marker through the closure
var result = marker.getLatLng().toString();  // but using the passed event is cleaner

var latitud = marker.getLatLng().lat.toString();
var longitud = marker.getLatLng().lng.toString();
cargarDatosLatLng(marker.getLatLng().lat.toString(), marker.getLatLng().lng.toString());
});





$(document).on('click', '.showMapbtn', function () {
    $('#modalMapa').modal('show');

});


function cargarDatosLatLng(latitud, longitud){
    $(".latitude2").val(latitud);
    $(".longitude2").val(longitud);
}

});
