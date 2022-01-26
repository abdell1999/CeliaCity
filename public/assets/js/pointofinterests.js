$(document).ready(function() {

    //Cargar funcion que crea la tabla de puntos de interes
    fetchpoint();

    //Funcion que genera la tabla de puntos de interes
    function fetchpoint() {
        $.ajax({
            type: "GET",
            url: "/fetch-point",
            dataType: "json",
            success: function (response) {
                $('tbody').html("");
                //console.log(response);
                $.each(response.pointofinterest, function (key, item){
                    //console.log(response);
                    $('tbody').append("<tr>\
                    <th>"+ item.name+"</th>\
                    <th>"+ item.latitude+"</th>\
                    <th>"+ item.longitude+"</th>\
                    <th>"+ item.movilephone+"</th>\
                    <th>"+ item.text+"</th>\
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4'><button data-bs-toggle='modal' data-bs-target='#editModal' class='editbtn' value="+item.id+"><i class='far fa-edit' style='color: blue;'></i></button></th>\
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 '><button data-bs-toggle='modal' data-bs-target='#exampleModal' class='deletebtn' value="+item.id+"><i class='far fa-trash-alt' style='color: blue;'></i></button></th>\
                    </tr>");
                })
            },
            error:function(response) {
                console.log(response);
            }
        });
    }

    //Editar
    $(document).on('click','.editbtn',function(e) {
        e.preventDefault();
        var point_id = $(this).val();
        //console.log(point_id);

        $('#editModal').modal('show');

        $.ajax({
            type: "GET",
            url: "/edit-pointofinterest/"+point_id,
            success: function (response) {
                console.log(response);
                console.log(response.pointofinterests);
                console.log(response.categories);
                console.log(response.puntocategoria);

                if (response.status == 404) {
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('#editModal').modal('hide');
                } else {
                    //console.log(response.pointofinterest.name);

                    $('#edit_name').val(response.pointofinterests.name);
                    $('#edit_latitude').val(response.pointofinterests.latitude);
                    $('#edit_longitude').val(response.pointofinterests.longitude);
                    $('#edit_movilephone').val(response.pointofinterests.movilephone);
                    $('#edit_contenido').val(response.pointofinterests.text);
                    $.each(response.categories,function(index, item){
                            console.log(item.name);
                            if(item.selected) {
                                $('#edit_categoriespoint').append(`<option selected value="${item.id}">${item.name}</option>`);
                            }else{
                            $('#edit_categoriespoint').append(`<option value="${item.id}">${item.name}</option>`);
                            }
                    });
                    $('#point_id').val(point_id);
                }
            }
        });
        $('.editformPoint').find('input').val('');
    });




    $(document).on('click','.add_pointofinterest', function(e) {
        e.preventDefault();
        //console.log('Hola');

        var data = {
            'name': $('.name').val(),
            'latitude':$('.latitude').val(),
            'longitude':$('.longitude').val(),
            'movilephone':$('.movilephone').val(),
            'text':$('.contenido').val(),
            'categoriespoint':$('.categoriespoint').val()
        }
        console.log(data);
        $.ajax({
            type: "POST",
            url: "/pointofinterests",
            data: data,
            dataType: "json",
            success: function (response) {
                if(response.status === 400) {
                    $.each(response.errors, function (key,err_values){
                    $('#saveform_errList').append('<li>'+err_values+'</li>');
                    });
                }else{
                    $('#saveform_errList').html("");
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('.formPoint').find('input, textarea, select').val('');
                    $('#exampleModalLg').modal('hide');
                    fetchpoint();
                }
            },
            error: function (data) {
                console.log(data);
            }

        });
    });

    $(document).on('click', '.deletebtn', function () {
        var point_id = $(this).val();
        $('#DeleteModal').modal('show');
        $('#deleteing_id').val(point_id);
    });

    $(document).on('click', '.delete_point', function (e) {
        e.preventDefault();

        $(this).text('Deleting..');
        var id = $('#deleteing_id').val();
        $.ajax({
            type: "DELETE",
            url: "/delete-point/" + id,
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response.status == 404) {
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('.delete_point').text('Yes Delete');
                } else {
                    $('#success_message').html("");
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('.delete_point').text('Yes Delete');
                    $('#exampleModal').modal('hide');
                    fetchpoint();
                }
            }, error: function(response){
                console.log(response);
            }
        });
    });


});
