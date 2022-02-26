$(document).ready(function () {

    console.log("Script para gestionar las opciones cargado correctamente");


    id_option = 999;
    getAll();


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
                let valor = response.option.value;
                let tipo = response.option.type;
                let id_input = "input"+id_option

                console.log(tipo);
                console.log("id: "+id_option);

                function campoEditar(value, type){
                    let insertar = "";
                    if(type === "text"){
                        insertar = `<label for="textOption">Introduce el nuevo valor:</label>
                        </br>
                        <input id="${id_input}"
                        class="textOption" name="textOption" type="text" value="${value}">`;
                    }
                    if(type === "image"){
                        insertar = `<label for="imageOption">Selecciona un archivo:</label>
                        <input id="${id_input}"
                        name="imageOption" type="file">`;
                    }

                    if(type === "point"){

                        insertar = `
                        <label for="pointOption">Seleccione un punto de interés:</label>
                        <select id="${id_input} name="pointOption" class="pointOption">
                        <option value="1">Opción 1 <option/>
                        </select>
                        `;

                    }

                $.ajax({
                        url: "/fetch-point",
                        dataType: "json"
                        })
                      .done(function(response) {
                        $('.pointOption').html("");
                        $.each(response.pointofinterest, function (key, item) {
                            //console.log(response);
                            $('.pointOption').append(`
                            <option value="${item.id}">${item.name}<option/>`);
                        })

                    })

                    return insertar;

                };

                function campoMostrar(value, type){
                    let insertar = "";
                    if(type === "text"){
                        insertar = `<p> ${value} </p>`;
                    }
                    if(type === "image"){
                        insertar = `<img src="${value}" class="p-1 bg-white border rounded max-w-sm">`;
                    }

                    if(type === "point"){
                        insertar = `<p> ${value} </p>`;
                    }


                    return insertar;

                };




                $('#originalContent').html("");
                $('#originalContent').append(campoMostrar(valor, tipo));

                $('#modifiedContent').append(`<form method="post" enctype="multipart/form-data">`);
                $('#modifiedContent').html("");
                $('#modifiedContent').append(campoEditar(valor, tipo));

                $('#controlesModal').html("");
                $('#controlesModal').append(`<button type="button"
                class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                data-bs-dismiss="modal">
                Cerrar
            </button>
            <button idOption="${id_option}" type="button" optionType="${tipo}"
                class="guardar guardar${tipo} inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                Guardar cambios
            </button>`);
            $('#modifiedContent').append(`</form>`);









            },
            error: function (response) {
                console.log(response);
            }
        });

    }

    $(document).on('click', '.guardar', function (e) {
        e.preventDefault();


        //Pruebas
        let type = $(this).attr("optionType");


        let id = $(this).attr("idOption");
        let idInput = "input"+id;
        let newValue;


        console.log("Función update de options.js");
        console.log("id: "+id);
        //console.log("newValue: "+newValue);
        console.log("type: "+type);


        if(type === "text"){
            newValue = $('#'+idInput).val();
        }
        if(type === "image"){
            console.log("image, el input es una imagen !!!");
            //alert(idInput);
            console.log($('#'+idInput)[0].files[0]);
            //alert($('#'+idInput)[0].files[0]);
            //filename = $('#image_file')[0].files[0]
            //newValue = $('#'+idInput).prop("files")[0];

            newValue = new FormData();
            //newValue.append('value', $('#'+idInput).prop("files")[0]);


            var files = $('#'+idInput)[0].files[0];
            console.log("FILES: "+files[0]);
            //newValue = files;
            newValue.append('value', files[0]);
            console.log("newVALUEEEEEE "+newValue);
        }

        //Modificar con AJAX
        $.ajax({
            url: "/options/"+id,
            //url: "{{ route(options.update) }}",
            type: "PUT",
            data:{
                id:id,
                value:newValue,
                type:type,
                enctype: 'multipart/form-data',
                _method: "PUT",
                mimeType: 'multipart/form-data',
                processData: false,
                contentType: false,
            },
            success:function(response){

                loadOption(id);


                if(response){
                    //alert("HAY RESPUESTA");
                    //alert(response);
                }else{
                    //alert("TODO CORRECTO HERMANO, AUNQUE NO HAY RESPUESTA");
                }
            },
            error:function(response){
                    alert("Algo falla mijo");
                    //alert(id);
                }

        })

    });


    /**
     * Esta función se encarga de traer desde la base de datos todas las opciones y de establecerselas
     * a los diferentes elementos mediante una clase, es decir así es muy facil acceder a estos valores del
     * si sabemos la clase que debemos ponerle.
     */

    function getAll() {

        $.ajax({
            type: "GET",
            url: "/options/get-all",
            success: function (response) {
                //alert("MIRA AQUÏ");
                console.log(response);
                console.log(response.options[1].value); //accedo al value de townname

                townname = response.options[1].value;
                shortdescription = response.options[8].value;
                longdescription = response.options[9].value;

                $('.townname').html("");
                $('.townname').text(townname);

                $('.shortdescription').html("");
                $('.shortdescription').text(shortdescription);

                $('.longdescription').html("");
                $('.longdescription').text(longdescription);





                },error: function (response) {
                    console.log(response);

            }

            })

        }










});
