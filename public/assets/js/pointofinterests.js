$(document).ready(function() {

    $(document).on('click','.add_pointofinterest', function(e) {
        e.preventDefault();
        //console.log('Hola');

        var data = {
            'name': $('.name').val(),
            'latitude':$('.latitude').val(),
            'longitude':$('.longitude').val(),
            'movilephone':$('.movilephone').val(),
            'content':$('.content').val(),
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
            data: JSON.stringify,
            dataType: "json",
            success: function (response) {
                console.log(response);
            }
        });
    });

});
