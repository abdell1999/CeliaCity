$(document).ready(function() {
console.log("Documento cargado correctamente Comentarios");


$('#btnComentar').click(function() {
    crearComentario();
})


function crearComentario(){

    id_pointofinterest = $('#id_pointofinterest').val();
    text = $('#text').val();

    $.ajax({
        url: "/comentar",
        type: "POST",
        data:{
            id_pointofinterest: id_pointofinterest,
            text: text
        },
        success:function(response){

            console.log("SE HA INSERTADO ALGO");
            $('#text').val('');

            if(response){
                //RESPUESTA


            }else{
                //SIN RESPUESTA
                
            }
        },
        error:function(){
                alert("Ha ocurrido un error al crear el comentario");
            }

    })

}




});
