$(document).ready(function() {


    fetchpoint();

    function fetchpoint() {
        $.ajax({
            type: "GET",
            url: "/pointofinterests",
            dataType: "json",
            success: function (response) {
                console.log(response);
                $.each(response.pointofinterests, function (key, item){
                    $('tbody').append("<tr>\
                    <th>"+ item.name+"</th>\
                    <th>"+ item.latitude+"</th>\
                    <th>"+ item.longitude+"</th>\
                    <th>"+ item.movilephone+"</th>\
                    <th>"+ item.text+"</th>\
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4'><a href='{{ route('pointofinterests.edit', $pointofinterest->"+item.id+") }}'><i class='far fa-edit' style='color: blue;'></i></a></th>\
                    <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 '><form method='POST' action='{{ route('pointofinterests.destroy', $pointofinterest->"+item.id+") }}'>@csrf @method('DELETE') <input type='submit' class='' value='Eliminar'></form></th>\
                    </tr>");
                })
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
        /*
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        */
        $.ajax({
            type: "POST",
            url: "/pointofinterests",
            data: data,
            dataType: "json",
            success: function (response) {
                console.log(response);

                if(response.status === 400) {
                    $.each(response.errors, function (key,err_values){
                    $('#saveform_errList').append('<li>'+err_values+'</li>');
                    });
                }else{
                    $('#saveform_errList').html("");
                    $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                    $('#success_message').text(response.message);
                    $('#formPoint').find('input').val('');
                    fetchpoint();
                }
            }
            /*
            error: function (data) {
                console.log(data);
            }
            */
        });
    });


});
