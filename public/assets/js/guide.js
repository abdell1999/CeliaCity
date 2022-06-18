$(document).ready(function () {

    //alert("HOLA");

    //Editar
    $(document).on('click', '.point', function (e) {
        e.preventDefault();
        var point_id = $(this).data('guide');
        //console.log(point_id);
        $.ajax({
            type: "GET",
            url: "/guide/" + point_id,
            success: function (response) {
                mapsipe.panTo(new L.LatLng(response.pointofinterests.latitude, response.pointofinterests.longitude));
                mapsipe.setZoom(18);
                //cambiado el nombre a new_section porque daba conflico con css
                $('.about_content').addClass('card shadow-lg');
                $('.about_content').css("padding", "1rem");
                $('.new_section').empty();
                $('.new_section').append(`<h3 class="title"> <span>${response.pointofinterests.name}</span> </h3>`);
                $('.new_section').append(`<p class="text-left">${response.pointofinterests.text}</p>`);




                //RESOURCES
                $('.slider-guide').empty();
                response.resources.forEach(function (resource) {
                    // get extension of file
                    var ext = resource.route.split('.').pop();
                    if (ext == 'jpg' || ext == 'png' || ext == 'jpeg') {
                        var image = `
                        <div class="swiper-slide shadow-lg rounded">
                            <img src="${resource.route}" />
                        </div>`;
                    } else {
                        var image = `
                        <div class="swiper-slide">
                            <video muted controls preload style="width: 100%; height: 100%;">
                                <source src="${resource.route}" type="video/${ext}">
                            </video>
                        </div>`;
                    }

                    $('.slider-guide').append(image);
                })



            },
            error: function (response) {
                console.log("Ha fallado la carga en AJAX: " + response);
                $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                $('#success_message').text(response);
                $('#editModal').modal('hide');
            }

        });
    });

});
