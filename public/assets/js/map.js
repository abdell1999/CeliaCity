$(document).ready(function() {

console.log("¡¡Script para gestionar mapas cargado correctamente!!");


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
console.log(result);
var latitud = marker.getLatLng().lat.toString();
var longitud = marker.getLatLng().lng.toString();
console.log("Latitud: "+ latitud);
console.log("Longitud: "+ longitud);
cargarDatosLatLng(marker.getLatLng().lat.toString(), marker.getLatLng().lng.toString());
});





$(document).on('click', '.showMapbtn', function () {
    $('#modalMapa').modal('show');
    console.log("¡¡Mostrando el modal para seleccionar un punto!!");
});


function cargarDatosLatLng(latitud, longitud){
    $("#latitude").val(latitud);
    $("#longitude").val(longitud);
}

});
