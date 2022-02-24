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
                    //comentarios.innerHTML +="<div id='"+comment.id+"'> <div class='flex justify-start items-center mb-2 ml-20'> <div class='w-1/2 bg-white p-2 pt-4 rounded shadow-2xl'> <div class='flex ml-3'> <div class='mr-3'> <img src='"+photo+"' alt='' class='w-12 h-12 rounded-full mr-4'> </div> <div> <h1 class='font-semibold'> "+name+" </h1> </div> </div> <div class='mt-5 p-3 w-full'> <p>"+comment.text+"</p> </div> <div class='flex justify-end'> <button class='mr-2'> <i class='far fa-edit' style=\'color: black;\'></i> Editar </button> <button> <i class='far fa-trash-alt' style=\'color: black;\'></i> Eliminar </button> </div> </div> </div> </div>";
                    //comentarios.innerHTML +="<div id = '"+comment.id+"'> <div class='d-flex flex-row comment-row'> <div class='p-2'><span class='round'><img src='"+photo+"' alt='user' width='50'></span></div> <div class='comment-text w-100'> <h5>"+name+"</h5> <div class='comment-footer'> <span class='date'>April 14, 2019</span> <span class='label label-info'>Pending</span> <span class='action-icons'> <a href='#' data-abc='true'><i class='fa fa-pencil'></i></a> <a href='#' data-abc='true'><i class='fa fa-rotate-right'></i></a> <a href='#' data-abc='true'><i class='fa fa-heart'></i></a> </span> </div> <p class='m-b-5 m-t-10'>"+comment.text+"</p> </div> </div> </div>";
                    comentarios.innerHTML += "<div class='col-md-8'> <div class='media g-mb-30 media-comment'>\
                    <img class='d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15' src='" + photo + "' alt='ImageDescription'>\
                    <div class='media-body u-shadow-v18 g-bg-secondary g-pa-30 shadow-lg rounded'>\
                    <div class='g-mb-15'>\
                    <h5 class='h5 g-color-gray-dark-v1 mb-0'>" + name + "</h5>\
                    </div>\
                    <p>" + comment.text + "</p>\
                    <ul class='list-inline d-sm-flex my-0'> </ul>\
                    <button data-bs-toggle='modal' data-bs-target='#editComment' class='' values=" + comment.id + "><i class='far fa-edit'></i>\
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




});
