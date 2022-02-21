$(document).ready(function() {


    console.log('Guia');
    //Editar
    $(document).on('click', '.point', function(e) {
        e.preventDefault();
        var point_id = $(this).data('guide');
        console.log(point_id);
        $.ajax({
            type: "GET",
            url: "/guide/" + point_id,
            success: function(response) {
                console.log(response);
                console.log("SEPARADOR");
                console.log(response.pointofinterests.latitude);
                $('.section_title').empty();
                $('.section_title').append(`<h3 class="title"> <span>${response.pointofinterests.name}</span> </h3>`);
                $('.section_title').append(`<p>${response.pointofinterests.text}</p>`);

                /*
                var mapsipe = L.map('map').
                setView([response.pointofinterests.latitude, response.pointofinterests.longitude], 16); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar
                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                    maxZoom: 18
                }).addTo(mapsipe);
                */


                //RESOURCES
                $('.swiper-wrapper').empty();
                response.resources.forEach(function(resource) {
                    var image = `
                            <div class="swiper-slide shadow-lg rounded">
                                <img src="${resource.route}" />
                            </div>`;
                    $('.swiper-wrapper').append(image);
                })




            },
            error: function(response) {
                console.log("Ha fallado la carga en AJAX: " + response);
                $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                $('#success_message').text(response);
                $('#editModal').modal('hide');
            }

        });
    });

});