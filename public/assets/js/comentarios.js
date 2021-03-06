$(document).ready(function () {


    //alert("HHOLA");

    $("#comentariosPosteados").html("");

    //Hacer comprobacion de input hidden que recoja el valor de la template if getElementById igual a no se que, else por defecto

    let template = $("#template").val();
    //alert(template);

    comentarios = document.getElementById("comentariosPosteados");

    var id_pointofinterest = $("#id_pointofinterest").val();

    fetchcomment(id_pointofinterest);

    function fetchcomment(id_pointofinterest) {
        comentarios.innerHTML = "";
        $.ajax({
            type: "GET",
            url: "/fetch-comment/" + id_pointofinterest,
            success: function (response) {
                var name = "pepe";
                var photo = "photo";

                $.each(response.comments, function (key, comment) {
                    $.each(response.users, function (key, user) {
                        if (user.id == comment.id_user) {
                            photo = user.photo;
                            name = user.name;
                        }
                    });
                    if (template == 1) {
                        comentarios.innerHTML +=
                            "<div class='col-md-8'> <div class='media g-mb-30 media-comment'>\
                    <img class='d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15' src='" +
                            photo +
                            "' alt='ImageDescription'>\
                    <div class='media-body u-shadow-v18 g-bg-secondary g-pa-30 shadow-lg rounded'>\
                    <div class='g-mb-15'>\
                    <h5 class='h5 g-color-gray-dark-v1 mb-0'>" +
                            name +
                            "</h5>\
                    </div>\
                    <p>" +
                            comment.text +
                            "</p>\
                    <ul class='list-inline d-sm-flex my-0'> </ul>\
                    <button data-toggle='modal' data-target='#editComment' class='btn btn-warning mt-2 ml-2 editbtn' value=" +
                            comment.id +
                            ">editar\
                    <button data-toggle='modal' data-target='#deleteComment' class='btn btn-dark mt-2 ml-2 deletebtn' value=" +
                            comment.id +
                            ">eliminar\
                    </button>\
                    </div>\
                    </div>";
                    }

                    if (template == 2) {
                        comentarios.innerHTML += `<p><span class="image left"> <img class="rounded-circle shadow-1-strong me-3"
                        src="${photo}" alt="avatar" width="60"
                        height="60"></span>${name}</br>${comment.text}</p>`;
                    }
                });

            },
            error: function (response) {
                //console.log(response);
            },
        });
    }

    $("#btnComentar").click(function () {
        crearComentario();
    });

    function crearComentario() {
        text = $("#text").val();



        $.ajax({
            url: "/comentar",
            type: "POST",
            data: {
                id_pointofinterest: id_pointofinterest,
                text: text,
            },
            success: function (response) {

                $("#text").val("");

                fetchcomment(id_pointofinterest);

                if (response) {
                    //RESPUESTA
                } else {
                    //SIN RESPUESTA
                }
            },
            error: function (response) {
                //console.log(response);
            },
        });
    }

    $(document).on("click", ".deletebtn", function () {
        var comment_id = $(this).val();
        $("#DeleteComment").modal("show");
        $("#deleteing_id").val(comment_id);
    });

    $(document).on("click", ".delete_comment", function (e) {
        e.preventDefault();
        $(this).text("Borrando..");
        var id = $("#deleteing_id").val();
        $.ajax({
            type: "DELETE",
            url: "/delete-comments/" + id,
            dataType: "json",
            success: function (response) {

                if (response.status == 404) {
                    $(".delete_comment").text("Borrado Correctamente");
                } else {
                    $(".delete_comment").text("Borrado Correctamente");
                    $("#deleteComment").modal("hide");
                    fetchcomment(id_pointofinterest);
                }
            },
            error: function (response) {
                //console.log(response);
            },
        });
    });

    $(document).on("click", ".editbtn", function (e) {
        e.preventDefault();
        var comment_id = $(this).val();


        $("#editModal").modal("show");

        $.ajax({
            type: "GET",
            url: "/edit-comment/" + comment_id,
            success: function (response) {

                if (response.status == 404) {
                    $("#editModal").modal("hide");
                } else {
                    $(".edit_text").val(response.comment.text);
                    $("#comment_id").val(comment_id);
                }
            },
        });
        $(".editformComment").find("input").val("");
    });

    //Update de Comentario

    $(document).on("click", ".update_comment", function (e) {
        e.preventDefault();

        $(this).text("Actualizando..");
        var id = $("#comment_id").val();
        //alert(id);

        var data = {
            text: $(".edit_text").val(),
        };

        $.ajax({
            type: "PUT",
            url: "/update-comment/" + id,
            data: data,
            dataType: "json",
            success: function (response) {

                if (response.status == 400) {
                    $.each(response.errors, function (key, err_value) {
                        $("#update_msgList").append(
                            "<li>" + err_value + "</li>"
                        );
                    });
                    $(".update_comment").text("Actualizar");
                } else {
                    $("#editModal").find("input").val("");
                    $(".update_comment").text("Update");
                    $("#editComment").modal("hide");
                    fetchcomment(id_pointofinterest);
                }
            },
        });
    });
});
