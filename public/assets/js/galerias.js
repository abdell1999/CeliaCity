console.log("Script para gestionar galeria cargado correctamente");
/*
$(document).ready(function() {
        fetchresources();

        function fetchresources(){
            $.ajax({
                type: "GET",
                url: "/fetch-resources",
                dataType: "json",
                success: function (response) {
                    //console.log(response);
                    $(".dividir").html("");

                    $.each(response.resources, function (key, item) {  
                        $(".dividir").append(`
                            <div class="imagetext">
                            <div class="w-full w-20 h-64 overflow-hidden">
                            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg w-99" src=`+item.route+`
                            </div>
                            </div>
                            <div class="flex justify-between">
                                <!--Image Tittle-->
                               <h1 class="flex justify-start">`+item.title+`</h1>
                               <!--Edit button-->
                               <input type="hidden" value=`+item.id+`>
                               <button class="ml-auto">
                                    <i class="far fa-edit" style="color: black;"></i>
                                </button>
                                <!--Delete button-->
                                <button class="ml-2"> <i class="far fa-trash-alt" style="color: black;"></i>
                                </button>
                            </div>
                        `);
                    })
                },error:function(response) {
                    console.log(response);
                }
            });
        }

        $(document).on('click','.add_resource', function(e) {
            e.preventDefault();

            let formResource = new FormData($('#formResource')[0]);
            var data = {
                'add_resourcepoint':$('.add_resourcepoint').val(),
                'images':$('input').val(),
            }
            console.log(formResource);

            $.ajax({
                type: "POST",
                url: "/resources",
                data: formResource,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                    if(response.status===400){
                        $.each(response.errors, function(key, err_values){
                            $('#saveform_errList').append('<li>'+err_values+'</li>');
                        });
                    }else{
                        $('#saveform_errList').html("");
                        $('#success_message').addClass('inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out');
                        $('#success_message').text(response.message);
                        $('.formResource').find('input').val('');
                        $('#addResource').modal('hide');
                        fetchresources();
                    }
                },
                error:function(data){
                    console.log(data);
                }
            });

            
        });

});
*/
