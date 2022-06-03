
$(document).ready(function() {



    function editable(idInput){
        $('#'+idInput).attr("readonly", false);
        $('#'+idInput).focus();
    }

    function editar(id, idInput){
        editable(idInput);
        $('#'+idInput).focusout(function(){
            if ($(this).is('[readonly]')) {

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

        crearCategoria();



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


    function crearCategoria(){
        /**
         * Este es el método más complejo, consiste en crear una categoría y automaticamente llevarse el foco a ella
         * haciendo uso del método de editar.
         *
         * En primer lugar hay que darle un nombre a la categoría ya que nada más tocar el botón de crear se creara.
         * El nombre puede ser categoria seguido de su id, la forma más simple de conseguir el id es ordenar por el id y
         * coger el último y sumarle 1.
         * Ya que para generar sus ventanas modales y acciones necesitamos saberlo.
         *
         * También se puede insertar el registro y luego consultar su id para ser más específicos. (OPCIÓN MÁS VIABLE)
         *
         * Parametrizar el tr con el id que recibamos.
         */




        var nombreCategoria = "Nueva Categoría";


         $.ajax({
            url: "/categories",
            type: "POST",
            data:{
                name: nombreCategoria
            },
            success:function(response){

                console.log("SE HA INSERTADO ALGO");


                if(response){
                    //RESPUESTA
                    console.log("EL ID INSERTADO ES "+response);

                    $('#categorieTable').append("<tr id='"+ response +"' class='datos'> <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-blueGray-700'> <input type='text' id='categorie"+ response +"' readonly value='Categoria"+ response +"'> </th> <th class='border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 '> <a href='#' class='categorieEdit'><i class='far fa-edit' style='color: blue;'></i></a> </th> <th> <!-- AQUI EMPIEZAN LOS MODALES --> <div x-data=\"{modal"+ response +": false}\" :class=\"{ \'overflow-y-hidden\': modal"+ response +"}\"> <button class='bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2' @click='modal"+ response +" = true'> Eliminar </button> <!-- Modales --> <div class='fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto' x-show='modal"+ response +"' x-transition:enter='transition duration-300' x-transition:enter-start='opacity-0' x-transition:enter-end='opacity-100' x-transition:leave='transition duration-300' x-transition:leave-start='opacity-100' x-transition:leave-end='opacity-0' style='display: none;'> <div class='relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100'> <div class='relative bg-white shadow-lg rounded-md text-gray-900 z-20' @click.away='modal"+ response +" = false' x-show='modal"+ response +"' x-transition:enter='transition transform duration-300' x-transition:enter-start='scale-0' x-transition:enter-end='scale-100' x-transition:leave='transition transform duration-300' x-transition:leave-start='scale-100' x-transition:leave-end='scale-0' style='display: none;'> <header class='flex items-center justify-between p-2'> <h2 class='font-semibold'>Confirmar eliminación</h2> <button class='focus:outline-none p-2' @click='modal"+ response +" = false'> <svg class='fill-current' xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'> <path d='M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z'> </path> </svg> </button> </header> <main class='p-2 text-center'> <p> ¿Esta seguro de que desea eliminar este registro (Este proceso es irreversible)? </p> </main> <footer class='flex justify-center p-2'> <button class='bg-green-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300' @click='modal"+ response +" = false'> Cancelar </button> <button class='bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 categorieDelete' eliminar='"+ response +"'>Eliminar</button> </footer> </div> </div> </div> </div> </th> </tr>");


                    var idInputR = "categorie"+response
                    console.log(idInputR);
                    //editable(idInputR);
                    editar(response, idInputR);

                    $('.categorieDelete').click(function(){

                        id = $(this).attr("eliminar");
                        eliminar(id);
                    })


                    $('.categorieEdit').click(function() {

                        //categorie
                        var id = $(this).parent().parent().attr("id");
                        var idInput = "categorie"+id
                        //alert(idInput);
                        editar(id, idInput);




                    })





                }else{
                    //SIN RESPUESTA
                    alert("No hay respuesta, hermano!");
                }
            },
            error:function(){
                    alert("Ha ocurrido un error al crear la categoría");
                }

        })









    }







});
