console.log("Script para gestionar categorías cargado correctamente");
$(document).ready(function() {



    function editable(idInput){
        $('#'+idInput).attr("readonly", false);
        $('#'+idInput).focus();
    }

    function editar(id, idInput){
        editable(idInput);
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
    }





    $('.categorieEdit').click(function() {

        //categorie
        var id = $(this).parent().parent().attr("id");
        var idInput = "categorie"+id
        //alert(idInput);
        editar(id, idInput);




    })


    $('#categorieCreate').click(function() {

        console.log("Creando categoría, espere un momento!");

        $('#categorieTable').append("<tr><th>HOLA</th></tr>");



    })



    function eliminar(id){

        $.ajax({
            url: "/categories/"+id,
            type: "POST",
            data:{
                id:id,
                _method: "DELETE"
            },
            success:function(response){

                $("#"+id).remove();


                if(response){
                    //RESPUESTA
                }else{
                    //SIN RESPUESTA
                }
            },
            error:function(){
                    alert("Ha ocurrido un error al eliminar la categoría");
                }

        })

    }


    $('.categorieDelete').click(function(){

        id = $(this).attr("eliminar");
        eliminar(id);
    })








});
