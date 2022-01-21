console.log("Script para gestionar galeria cargado correctamente");
$(document).ready(function() {
    function eliminar(id){

        $.ajax({
            url: "/resources/"+id,
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
                    alert("Ha ocurrido un error al eliminar el recurso");
                    alert(id);
                }

        })

    }


    $('.resourceDelete').click(function(){

        id = $(this).attr("eliminar");
        eliminar(id);
    })

});
