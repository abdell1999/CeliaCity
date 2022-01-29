$(document).ready(function () {

    //Cargar funcion que crea la tabla de puntos de interes
    fetchcomments();

    //Funcion que genera la tabla de puntos de interes
    function fetchcomments() {
        $.ajax({
            type: "GET",
            url: "/fetch-comments",
            dataType: "json",
            success: function (response) {
                $('tbody').html("");
                //console.log(response);
                $.each(response.comments, function (key, comment) {
                    var name = "";
                    var punto = "";
                    $.each(response.users, function (key, user) {
                        if (user.id == comment.id_user) {
                            name = user.name + user.surname1 + user.surname2;
                        }
                    });
                    $.each(response.points, function (key, points) {
                        if (points.id == comment.id_pointofinterest) {
                            punto = points.name;
                        }
                    });

                    $('tbody').append("<tr>\
                    <th>" + comment.date + "</th>\
                    <th>" + comment.valoration + "</th>\
                    <th>" + comment.text + "</th>\
                    <th>" + name + "</th>\
                    <th>" + punto + "</th>\
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4'><button data-bs-toggle='modal' data-bs-target='#editModal' class='editbtn' value=" + comment.id + "><i class='far fa-edit' style='color: blue;'></i></button></th>\
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 '><button data-bs-toggle='modal' data-bs-target='#exampleModal' class='deletebtn' value=" + comment.id + "><i class='far fa-trash-alt' style='color: blue;'></i></button></th>\
                    </tr>");
                })
            },
            error: function (response) {
                console.log(response);
            }
        });
    }

    $(document).on('click', '.deletebtn', function () {
        var comment_id = $(this).val();
        $('#DeleteModal').modal('show');
        $('#deleteing_id').val(comment_id);
    });

    $(document).on('click', '.delete_comment', function (e) {
        e.preventDefault();

        $(this).text('Borrando..');
        var id = $('#deleteing_id').val();
        $.ajax({
            type: "DELETE",
            url: "/delete-comment/" + id,
            dataType: "json",
            success: function (response) {
                //console.log(response);
                if (response.status == 404) {
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('.delete_comment').text('Borrado Correctamente');
                } else {
                    $('#success_message').html("");
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('.delete_comment').text('Borrado Correctamente');
                    $('#exampleModal').modal('hide');
                    fetchcomments();
                }
            },
            error: function (response) {
                console.log(response);
            }
        });
    });



    $(document).on('click', '.editbtn', function (e) {
        e.preventDefault();
        var comment_id = $(this).val();
        //console.log(point_id);

        $('#editModal').modal('show');

        $.ajax({
            type: "GET",
            url: "/edit-comment/" + comment_id,
            success: function (response) {
                //console.log(response);
                if (response.status == 404) {
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('#editModal').modal('hide');
                } else {
                    $('.edit_text').val(response.comment.text);
                    $('.edit_user').val(response.username);
                    $('.edit_point').val(response.pointofinterest);
                    $('#comment_id').val(comment_id);
                }
            }
        });
        $('.editformComment').find('input').val('');
    });

    //Update de Comentario

    $(document).on('click', '.update_comment', function (e) {
        e.preventDefault();

        $(this).text('Actualizando..');
        var id = $('#comment_id').val();
        // alert(id);

        var data = {
            'text': $('.edit_text').val(),
        }

        $.ajax({
            type: "PUT",
            url: "/update-comment/" + id,
            data: data,
            dataType: "json",
            success: function (response) {
                //console.log(response);
                if (response.status == 400) {
                    $('#update_msgList').html("");
                    $('#update_msgList').addClass('inline-block px-6 py-2.5 bg-red-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg transition duration-150 ease-in-out');
                    $.each(response.errors, function (key, err_value) {
                        $('#update_msgList').append('<li>' + err_value +
                            '</li>');
                    });
                    $('.update_comment').text('Actualizar');
                } else {
                    $('#update_msgList').html("");

                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('#editModal').find('input').val('');
                    $('.update_comment').text('Update');
                    $('#editModal').modal('hide');
                    fetchcomments();
                }
            }
        });

    });

});
