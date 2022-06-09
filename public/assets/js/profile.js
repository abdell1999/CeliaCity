$(document).ready(function () {

    var user_id = $("#user_id").val();

    $(document).on("click", ".deletebtn", function () {
        var profile_id = $(this).val();
        $("#deleteProfile").modal("show");
        $("#deleteing_id").val(profile_id);
        console.log(profile_id);
    });

    $(document).on("click", ".delete_profile", function (e) {
        e.preventDefault();
        $(this).text("Borrando..");
        var id = $("#deleteing_id").val();
        $.ajax({
            type: "DELETE",
            url: "/delete-profile/" + id,
            dataType: "json",
            success: function (response) {

                if (response.status == 404) {
                    $(".delete_profile").text("Error");
                } else {
                    $(".delete_profile").text("Borrado Correctamente");
                    $("#deleteProfile").modal("hide");
                }
                //HAY QUE REDIRECCIONAR A LA PAGINA PRINCIPAL
                location.href = "/home";
            },
            error: function (response) {
                console.log(response);
            },
        });
    });

    $(document).on("click", ".editbtn", function (e) {
        e.preventDefault();
        var user_id = $(this).val();


        $("#editModal").modal("show");

        $.ajax({
            type: "GET",
            url: "/edit-profile/" + user_id,
            success: function (response) {

                $(".edit_name").val(response.user.name);
                $(".edit_surname1").val(response.user.surname1);
                $(".edit_surname2").val(response.user.surname2);
                $(".edit_email").val(response.user.email);
                $(".edit_address").val(response.user.address);
                $(".edit_movilphone").val(response.user.movilphone);
                $(".edit_phone").val(response.user.phone);
                $(".edit_borndate").val(response.user.borndate);
                $("#user_id").val(user_id);
            },
            error: function (response) {
                console.log(response);
            },
        });
        $(".editformProfile").find("input").val("");
    });

    //Update de Comentario

    $(document).on("click", ".update_profile", function (e) {
        e.preventDefault();

        $(this).text("Actualizando..");
        var id = $("#user_id").val();


        var data = {
            name: $(".edit_name").val(),
            surname1: $(".edit_surname1").val(),
            surname2: $(".edit_surname2").val(),
            email: $(".edit_email").val(),
            address: $(".edit_address").val(),
            movilphone: $(".edit_movilphone").val(),
            phone: $(".edit_phone").val(),
            borndate: $(".edit_borndate").val()
        };

        $.ajax({
            type: "PUT",
            url: "/update-profile/" + id,
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
                    $("#editProfile").modal("hide");
                }
                location.reload();
            },
        });
    });

});
