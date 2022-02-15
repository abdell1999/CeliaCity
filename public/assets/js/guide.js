$(document).ready(function () {


    console.log('Guia');
    //Editar
    $(document).on('click', '.point', function(e) {
        e.preventDefault();
        var point_id = $(this).data('guide');
        console.log(point_id);
        $.ajax({
            type: "GET",
            url: "/showpoint/" + point_id,
            success: function(response) {
                console.log(response);
            }
        });
    });

});
