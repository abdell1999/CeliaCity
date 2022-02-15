$(document).ready(function () {

    console.log("Script para gestionar las opciones cargado correctamente");


    id_option = 999;


    $(document).on('click', '.optionEdit', function () {
        console.log("El modal esta abierto");
        id_option = $(this).parent().parent().attr("id");
        loadOption(id_option);
    });



    function loadOption(id_option) {

        $.ajax({
            type: "GET",
            url: "/options/get-option/" + id_option,
            success: function (response) {
                console.log(response);





                $('#originalContent').html("");
                $('#originalContent').append("<p>"+response.option.value+"</p>");


                $('#modifiedContent').html("");
                $('#modifiedContent').append("<input type='text' placeholder='"+response.option.value+"' value='"+response.option.value+"'>");








            },
            error: function (response) {
                console.log(response);
            }
        });

    }




});
