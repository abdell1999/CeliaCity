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
                    if(type === "template"){

                        insertar = `
                        <label for="templateOption">Seleccione la plantilla a aplicar:</label>
                        <select id="${id_input}" name="templateOption" class="templateOption">
                        <option value="1">Plantilla 1 </option>
                        <option value="2">Plantilla 2 </option>
                        </select>
                        `;

                    }
                    if(type === "image"){
                        insertar = `<label for="imageOption">Selecciona un archivo:</label>
                        <input id="${id_input}"
                        name="value" type="file">`;
                    }

                    if(type === "point"){

                        insertar = `
                        <label for="pointOption">Seleccione un punto de interés:</label>
                        <select id="${id_input}" name="pointOption" class="pointOption">
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
                            selected = "";

                            if(item.id == value){
                                selected = "selected";
                            }


                            $('.pointOption').append(`<option value="${item.id}" ${selected}>${item.id}. ${item.name}</option>`);
                        })

                    })

                    return insertar;

                };

                function campoMostrar(value, type){
                    let insertar = "";
                    if(type === "text"){
                        insertar = `<p> ${value} </p>`;
                    }

                    if(type === "template"){
                        insertar = `<p> Plantilla ${value} </p>`;
                    }

                    if(type === "image"){
                        insertar = `<img src="${value}" class="p-1 bg-white border rounded max-w-sm">`;
                    }

                    if(type === "point"){
                        insertar = `<p class="pointparra"></p>`;

                        $.ajax({
                            url: "/fetch-onepoint/"+value,
                            dataType: "json"
                            })
                          .done(function(response) {
                            $('.pointparra').html("");
                                //console.log(response);

                                    $('.pointparra').text(response.pointofinterest.name);
                                    $('.pointparra').append(`<br><a class="underline" target="_blank" href="/pointofinterests/${value}">Ver punto</a>`);




                        })


                    }


                    return insertar;

                };




                $('#originalContent').html("");
                $('#originalContent').append(campoMostrar(valor, tipo));

                $('#modifiedContent').html("");
                $('#modifiedContent').append(`<form method="post" enctype="multipart/form-data id="formulario">`);

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
        let formData = new FormData();


        console.log("Función update de options.js");
        console.log("id: "+id);
        //console.log("newValue: "+newValue);
        console.log("type: "+type);


        if(type === "text" || type === "point" || type === "template"){
            newValue = $('#'+idInput).val();
            console.log(newValue);

        }


        if(type === "image"){
            console.log("image, el input es una imagen !!!");
            //alert(idInput);
            console.log($('#'+idInput)[0].files[0]);
            //alert($('#'+idInput)[0].files[0]);
            //filename = $('#image_file')[0].files[0]
            //newValue = $('#'+idInput).prop("files")[0];

            //newValue = new FormData();
            //newValue.append('value', $('#'+idInput).prop("files")[0]);
            //newValue = $('#'+idInput).prop("files")[0];


            //var files = $('#'+idInput)[0].files[0];
            //console.log("FILES: "+files[0]);
            //newValue = files;
            //newValue.append('value', files[0]);

            //console.log("newVALUEEEEEE "+newValue);

            //var formData = new FormData($('#formulario').eq(0)[0]);

            formData.append('type', type);
            formData.append('value', $('#'+idInput)[0].files[0]);
            formData.append('_method', 'put');


            //formData.append('hola', 'hola');
            console.log("Después de crear el formdata");
            for (var value of formData.values()) {
                console.log(value);
             }
            console.log("MIRA ARRIBA");

        }

        //Modificar con AJAX
        console.log("AQUI -- ESTO ES LO QUE SE INSERTARA");
        console.log("id en bd: "+id);
        console.log("valor a insertar: "+newValue);
        console.log("tipo a insertar: "+type);
        console.log("FIN -- SUERTEEE!!!");
        if(type == "image"){
            console.log("HOLA");

            $.ajax({
                method: 'POST',
                url: "/options/"+id,


                data: formData,
                _method: 'put',
                cache:false,
                contentType: false,
                processData: false,
                error: function(data){
                   console.log(data);
                 },
                success: function(data){
                    loadOption(id);
                    console.log(data);
                }
               });



















        }else{
            $.ajax({
                url: "/options/"+id,
                //url: "{{ route(options.update) }}",
                type: "PUT",
                //processData: false,
                data:{
                    id:id,
                    value:newValue,
                    type:type,
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
        }

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
                point1 = response.options[11].value;
                point2 = response.options[12].value;
                point3 = response.options[13].value;
                coverpage = response.options[4].value;
                coverpage2 = response.options[14].value;

                $('.coverpage').css("background-image", "url("+coverpage+")");
                $('.coverpage2').css("background-image", "url("+coverpage2+")");

                $('.townname').html("");
                $('.townname').text(townname);

                $('.shortdescription').html("");
                $('.shortdescription').text(shortdescription);

                $('.longdescription').html("");
                $('.longdescription').text(longdescription);




                    console.log("Aquí empieza lo de editar puntos destacados");
                    id_inicial = point1;
                    limite = 235;

                    for (let index = 1; index < 4; index++) {
                        if(index != 1){
                            limite = 85;
                        }

                        if(index == 2){
                            id_inicial = point2;
                        }

                        if(index == 3){
                            id_inicial = point3;
                        }

                        $('.pointname'+index).html("");
                        $('.pointshorttext'+index).html("");
                        //alert(point1);

                        $.ajax({
                            url: "/fetch-onepoint/"+id_inicial,
                            dataType: "json"
                            })
                          .done(function(response) {
                                    console.log("PUNTO:");
                                    console.log(response.pointofinterest);
                                    //alert(response.pointofinterest.name);
                                    $('.pointname'+index).text(response.pointofinterest.name);
                                    $('.pointshorttext'+index).text(response.pointofinterest.text.substr(0,limite)+" ...");
                                    $('.pointlink'+index).attr("href", "/pointofinterests/"+response.pointofinterest.id);
                                    $('.point'+index+"image").attr("src", response.resources[0].route);

                        })


                    }

















                },error: function (response) {
                    console.log(response);

            }

            })

        }










});
