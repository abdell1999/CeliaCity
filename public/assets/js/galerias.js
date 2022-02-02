console.log("Script para gestionar galeria cargado correctamente");

$(document).ready(function () {

    fetchresources();

    function fetchresources() {
        $.ajax({
            type: "GET",
            url: "/fetch-resources",
            dataType: "json",
            success: function (response) {
                console.log(response);
                $('.dividir').html("");
                $.each(response.resources, function (key, item) {
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
                        <button class="ml-2"> <i class="far fa-trash-alt" value="` + item.id + `" style="color: black;"></i> </button>
                        </div>
                    </div>`);
                });
            }
        });
    }


    $(document).on('click', '.editbtn', function (e) {
        e.preventDefault();
        var resource_id = $(this).val();
        // alert(stud_id);
        $('#editModal').modal('show');
        $.ajax({
            type: "GET",
            url: "/edit-resource/" + resource_id,
            success: function (response) {
                if (response.status == 404) {
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('#editModal').modal('hide');
                } else {
                    // console.log(response.student.name);
                    $('#edit_title').val(response.resource.title);
                    $('#resource_id').val(resource_id);
                }
            }
        });
        $('.btn-close').find('input').val('');
    });

    $(document).on('click', '.update_resource', function (e) {
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
            success: function (response) {
                // console.log(response);
                if (response.status == 400) {
                    $('#update_msgList').html("");
                    $('#update_msgList').addClass('alert alert-danger');
                    $.each(response.errors, function (key, err_value) {
                        $('#update_msgList').append('<li>' + err_value +
                            '</li>');
                    });
                    $('.update_resource').text('Actualizando');
                } else {
                    $('#update_msgList').html("");

                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('#editModal').find('input').val('');
                    $('.update_resource').text('Actualizando');
                    $('#editModal').modal('hide');
                    fetchresources();
                }
            }
        });
    });

});
