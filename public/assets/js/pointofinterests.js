$(document).ready(function() {


    fetchpoint();

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
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4'><button class='editbtn' value="+item.id+"><i class='far fa-edit' style='color: blue;'></i></button></th>\
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 '><button data-bs-toggle='modal' data-bs-target='#exampleModal' class='deletebtn' value="+item.id+"><i class='far fa-trash-alt' style='color: blue;'></i></button></th>\
                    </tr>");
                })
            },
            error:function(response) {
                console.log(response);
            }
        });
    }

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
