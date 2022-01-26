console.log("Script para gestionar galeria cargado correctamente");
$(document).ready(function() {
        fetchresources();

        function fetchresources(){
            $.ajax({
                type: "GET",
                url: "/fetch-resources",
                dataType: "json",
                success: function (response) {
                    console.log(response);
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

});
