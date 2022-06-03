//const { forEach, functionsIn } = require("lodash");

console.log("Script para gestionar galeria cargado correctamente");

$(document).ready(function() {

    fetchresources();

    function fetchresources() {
        $.ajax({
            type: "GET",
            url: "/fetch-resources",
            dataType: "json",
            success: function(response) {
                //console.log(response);
                $('.dividir').html("");
                $.each(response.resources, function(key, item) {

                    var ext = item.route;
                    const extension = ext.split('.').pop();

                    if(extension.toLowerCase() == 'png' || extension.toLowerCase() == 'jpg' || extension.toLowerCase() == 'jpeg'){
                            $('.dividir').append(`
                        <div class="imagetext">
                            <div class="w-full w-20 h-64 overflow-hidden">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg w-99" src="` + item.route + `">
                            </div>
                            <div class="flex justify-between">
                            <!--Image Tittle-->
                            <h1 class="flex justify-start">` + item.title + `</h1>
                            <!--Edit button-->
                            <button
                                class="ml-auto editbtn" data-bs-toggle='modal' data-bs-target='#editModal' value="` + item.id + `">
                                <i class="far fa-edit" style="color: black;"></i>
                                </button>
                            <!--Delete button-->
                            <button class="ml-2 deletebtn" data-bs-toggle='modal' data-bs-target='#exampleModal' value="` + item.id + `"> <i class="far fa-trash-alt" style="color: black;"></i> </button>
                            </div>
                        </div>`);
                    }else {
                            $('.dividir').append(`
                        <div class="imagetext">
                            <div class="w-full w-20 h-64 overflow-hidden">
                                <video muted controls class="block object-cover object-center w-full h-full rounded-lg w-99" preload>
                                    <source src="` + item.route + `" type="video/`+extension+`">
                                </video>
                            </div>
                            <div class="flex justify-between">
                            <!--Image Tittle-->
                            <h1 class="flex justify-start">` + item.title + `</h1>
                            <!--Edit button-->
                            <button
                                class="ml-auto editbtn" data-bs-toggle='modal' data-bs-target='#editModal' value="` + item.id + `">
                                <i class="far fa-edit" style="color: black;"></i>
                                </button>
                            <!--Delete button-->
                            <button class="ml-2 deletebtn" data-bs-toggle='modal' data-bs-target='#exampleModal' value="` + item.id + `"> <i class="far fa-trash-alt" style="color: black;"></i> </button>
                            </div>
                        </div>`);
                    }


                });
            }
        });
    }


    $(document).on('click', '.editbtn', function(e) {
        e.preventDefault();
        var resource_id = $(this).val();
        // alert(stud_id);
        $('#editModal').modal('show');
        $.ajax({
            type: "GET",
            url: "/edit-resource/" + resource_id,
            success: function(response) {
                if (response.status == 404) {
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('#editModal').modal('hide');
                } else {

                    $('#edit_title').val(response.resource.title);
                    $('#resource_id').val(resource_id);
                }
            }
        });
        $('.btn-close').find('input').val('');
    });

    /*EVENTO BORRAR */
    $(document).on('click', '.update_resource', function(e) {
        e.preventDefault();

        $(this).text('Actualizando..');
        var id = $('#resource_id').val();
        // alert(id);

        var data = {
            'title': $('#edit_title').val(),
        }

        $.ajax({
            type: "PUT",
            url: "/update-resource/" + id,
            data: data,
            dataType: "json",
            success: function(response) {
                // console.log(response);
                if (response.status == 400) {
                    $('#update_msgList').html("");
                    $('#update_msgList').addClass('alert alert-danger');
                    $.each(response.errors, function(key, err_value) {
                        $('#update_msgList').append('<li>' + err_value +
                            '</li>');
                    });
                    $('.update_resource').text('Actualizando');
                } else {
                    $('#update_msgList').html("");

                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('#editModal').find('input').val('');
                    $('.update_resource').text('Actualizando');
                    $('#editModal').modal('hide');
                    fetchresources();
                }
            }
        });
    });
    /*EVENTO EDITAR */

    /*EVENTO BORRAR */
    $(document).on('click', '.deletebtn', function() {
        var resource_id = $(this).val();
        $('#DeleteModal').modal('show');
        $('#deleteing_id').val(resource_id);
    });

    $(document).on('click', '.delete_resource', function(e) {
        e.preventDefault();

        $(this).text('Deleting..');
        var id = $('#deleteing_id').val();
        $.ajax({
            type: "DELETE",
            url: "/delete-resource/" + id,
            dataType: "json",
            success: function(response) {
                if (response.status == 404) {
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text("Borrado con éxito");
                    $('.delete_resource').text('Sí, Borrar');
                } else {
                    $('#success_message').html("");
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text("Borrado con éxito");
                    $('.delete_resource').text('Sí, Borrar');
                    $('#exampleModal').modal('hide');
                    fetchresources();
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
    });
    /*EVENTO BORRAR */

    /*MÉTODO PARA SUBIR IMÁGENES
    $(`#upManyImages`).submit(Element=> {
        Element.preventDefault();

        var imagenes = FormData();

        imagenes.append("Pointofinterest", $('.form-select').val());

        $('.form-select').for(function (resource){
            imagenes.append("Resources", $('.form-control').files[i]);
        })


    })*/


});
