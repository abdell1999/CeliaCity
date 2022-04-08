$(document).ready(function () {



    //Editar
    $(document).on('click', '.editBtn', function (e) {
        e.preventDefault();
        $('#modalEditar').modal('show');
        id_user = $(this).parent().parent().attr("id");
        //alert("ID = "+ id_user);

    });

    /*EVENTO BORRAR */
    $(document).on('click', '.deletebtn', function () {
        var user_id = $(this).attr("value");
        $('#DeleteModal').modal('show');
        $('#deleteing_id').val(user_id);
    });



    $(document).on('click', '.delete_user', function (e) {
        e.preventDefault();

        $(this).text('Borrando..');
        var id = $('#deleteing_id').val();
        $.ajax({
            type: "DELETE",
            url: "/delete-user/" + id,
            dataType: "json",
            success: function (response) {
                if (response.status == 404) {
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text("Borrado con éxito");
                    $('.delete_user').text('Sí, Borrar');
                } else {
                    $('#success_message').html("");
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text("Borrado con éxito");
                    $('.delete_user').text('Sí, Borrar');
                    $('#DeleteModal').modal('hide');
                    fetchuser();
                }
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
    /*FIN EVENTO BORRAR */






    console.log("Script para gestionar usuarios cargado correctamente!!");
    fetchuser();

    function fetchuser() {
        $.ajax({
            type: "GET",
            url: "/fetch-user",
            dataType: "json",
            success: function (response) {
                $('tbody').html("");
                console.log("Hay respuesta por parte del servidor");
                $.each(response.user, function (key, item) {

                    rol = "Error";
                    if (item.rol == 0) {
                        rol = "Administrador";
                    }

                    if (item.rol == 1) {
                        rol = "Editor";

                    }

                    if (item.rol == 2) {
                        rol = "Usuario";

                    }

                    $('tbody').append("<tr id='" + item.id + "'>\
                    <td class='px-6 py-4 whitespace-nowrap'>\
                    <div class='flex items-center'>\
                    <div class='flex-shrink-0 h-10 w-10'>\
                    <img class='h-10 w-10 rounded-full' src='" + item.photo + "' alt='' />\
                    </div>\
                    <div class='ml-4'>\
                    <div class= 'text-sm font-medium text-gray-900' > " + item.name + " " + item.surname1 + " " + item.surname2 + "</div >\
                    <div class='text-sm text-gray-500'>" + item.email + "</div>\
                    </div></div></td><td class='px-6 py-4 whitespace-nowrap'>\
                    <div class='text-sm text-gray-900'>" + item.address + "</div>\
                    <div class='text-sm text-gray-700'>" + item.phone + " / " + item.movilphone + "</div></td>\
                    <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" + item.borndate + "</td>\
                    <td class='px-6 py-4 whitespace-nowrap text-sm text-gray-500'>" + rol + "</td>\
                    <td class='px-6 py-4 whitespace-nowrap text-right text-sm font-medium'>\
                    <a href='#' class='text-indigo-600 hover:text-indigo-900'>View</a>\
                    <a href='#' class='text-indigo-600 hover:text-indigo-900 editBtn' value=" + item.id + "\ data-bs-target='#modalEditar'>Edit</a>\
                    <a href='#' class='text-indigo-600 hover:text-indigo-900 deletebtn' value=" + item.id + "\ data-bs-target='#DeleteModal'>Delete</a></td></tr>\
                    </tr>");
                })


                console.log(response);
            },
            error: function (response) {
                console.log("ERROR");
                console.log(response);
            }
        });
    }
});
