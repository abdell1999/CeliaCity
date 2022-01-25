console.log("Script para gestionar galeria cargado correctamente");
$(document).ready(function() {
        console.log("Documento cargado correctamente!");

        function eliminar(id){

            $.ajax({
                url: "/resources/"+id,
                type: "POST",
                data:{
                    id:id,
                    _method: "DELETE"
                },
                success:function(response){
                    console.log("Correcto");
                    $("#"+id).remove();


                    if(response){
                        //RESPUESTA
                    }else{
                        //SIN RESPUESTA
                    }
                },
                error:function(){
                        console.log("ID del recurso: "+id);
                        console.log("Ha ocurrido un error al eliminar el recurso");
                    }

            })


    }


    $('.resourceDelete').click(function(){

        id = $(this).attr("eliminar");
        eliminar(id);
    })

});
