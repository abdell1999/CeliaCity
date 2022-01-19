console.log("Script para editar categorías cargado correctamente");


$(document).ready(function() {
    $('.categorieEdit').click(function() {

        //categorie
        var id = $(this).parent().parent().attr("id");
        var idInput = "categorie"+id
        //alert(idInput);

        $('#'+idInput).attr("readonly", false);
        $('#'+idInput).focus();


        $('#'+idInput).focusout(function(){
            if ($(this).is('[readonly]')) {
                console.log("Ya esta hermano, no más");
            }else{
                //$(this).attr("value", "PRUEBA");




                $.ajax({
                    url: "/categories/"+id,
                    //url: "{{ route(categories.update) }}",
                    type: "POST",
                    data:{
                        id:id,
                        name:$(this).val(),
                        _method: "PUT"
                    },
                    success:function(response){
                        if(response){
                            //alert("HAY RESPUESTA");
                            //alert(response);
                        }else{
                            //alert("TODO CORRECTO HERMANO, AUNQUE NO HAY RESPUESTA");
                        }
                    },
                    error:function(){
                            alert("Algo falla mijo");
                            //alert(id);
                        }

                })







                $(this).attr("readonly", true);


















    		//alert(idInput);
                console.log(idInput);
            }



	});



    })
});
