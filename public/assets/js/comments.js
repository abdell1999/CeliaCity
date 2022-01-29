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
                console.log(response);
                $('tbody').html("");
                //console.log(response);
                $.each(response.comments, function (key, comment) {
                    //console.log(response);
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
                console.log(response);
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
});
