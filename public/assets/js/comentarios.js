$(document).ready(function () {
    console.log("Script para gestionar comentarios cargado correctamente");

    $('#comentariosPosteados').html("");

    comentarios = document.getElementById('comentariosPosteados');

    var id_pointofinterest = $('#id_pointofinterest').val();

    fetchcomment(id_pointofinterest);



    function fetchcomment(id_pointofinterest) {
        comentarios.innerHTML = "";
        $.ajax({
            type: "GET",
            url: "/fetch-comment/" + id_pointofinterest,
            success: function (response) {
                console.log(response);
                var name = "pepe";
                var photo = "photo";

                $.each(response.comments, function (key, comment) {

                    $.each(response.users, function (key, user) {
                        if (user.id == comment.id_user) {
                            photo = user.photo;
                            name = user.name;
                        }

                    })
                    comentarios.innerHTML += "<div class='col-md-8'> <div class='media g-mb-30 media-comment'>\
                    <img class='d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15' src='" + photo + "' alt='ImageDescription'>\
                    <div class='media-body u-shadow-v18 g-bg-secondary g-pa-30 shadow-lg rounded'>\
                    <div class='g-mb-15'>\
                    <h5 class='h5 g-color-gray-dark-v1 mb-0'>" + name + "</h5>\
                    </div>\
                    <p>" + comment.text + "</p>\
                    <ul class='list-inline d-sm-flex my-0'> </ul>\
                    <button data-toggle='modal' data-target='#editComment' class='editbtn' value=" + comment.id + "><i class='far fa-edit'></i>\
                    <button data-toggle='modal' data-target='#deleteComment' class='deletebtn' value=" + comment.id + "><i class='far fa-trash-alt'></i>\
                    </button>\
                    </div>\
                    </div>";

                })






            },
            error: function (response) {
                console.log(response);
            }
        });

    }
























    $('#btnComentar').click(function () {
        crearComentario();
    })


    function crearComentario() {

        text = $('#text').val();

        console.log("Texto del comentario: " + text);
        console.log("ID del punto: " + id_pointofinterest);

        $.ajax({
            url: "/comentar",
            type: "POST",
            data: {
                id_pointofinterest: id_pointofinterest,
                text: text
            },
            success: function (response) {

                console.log("SE HA INSERTADO ALGO");
                $('#text').val('');

                fetchcomment(id_pointofinterest);

                if (response) {
                    //RESPUESTA


                } else {
                    //SIN RESPUESTA

                }
            },
            error: function (response) {
                alert("Ha ocurrido un error al crear el comentario");
                console.log(response);
            }

        })

    }

    $(document).on('click', '.deletebtn', function () {
        var comment_id = $(this).val();
        $('#DeleteComment').modal('show');
        $('#deleteing_id').val(comment_id);
    });

    $(document).on('click', '.delete_comment', function (e) {
        e.preventDefault();
        $(this).text('Borrando..');
        var id = $('#deleteing_id').val();
        $.ajax({
            type: "DELETE",
            url: "/delete-comments/" + id,
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response.status == 404) {
                    $('.delete_comment').text('Borrado Correctamente');
                } else {
                    $('.delete_comment').text('Borrado Correctamente');
                    $('#deleteComment').modal('hide');
                    fetchcomment(id_pointofinterest);
                }

            },
            error: function (response) {
                console.log(response);
            }
        });
    });




});
