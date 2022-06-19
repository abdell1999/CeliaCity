$(document).ready(function () {

    id_option = 999;
    getAll();

    /**
     * Esta función se encarga de cargar el id de opción seleccionado al abrir el modal,
     * a partir de este id se llama a otra función que carga la opción en cuestión.
     */
    $(document).on("click", ".optionEdit", function () {
        id_option = $(this).parent().parent().attr("id");
        loadOption(id_option);
    });



    /**
     * Esta función se trae la opción seleccionada y se carga en el modal en función del tipo, no es lo mismo un desplegable de puntos
     * que una imagen o que un texto. Lo que aparece en el modal es la opción de editar.
     * @param {*} id_option de la tabla options (esto viene del seeder, no es algo que el usuario pueda crear o cambiar)
     */
    function loadOption(id_option) {
        $.ajax({
            type: "GET",
            url: "/options/get-option/" + id_option,
            success: function (response) {

                let valor = response.option.value;
                let tipo = response.option.type;
                let id_input = "input" + id_option;



                function campoEditar(value, type) {
                    let insertar = "";
                    if (type === "text") {
                        insertar = `<label for="textOption">Introduce el nuevo valor:</label>
                        </br>
                        <input id="${id_input}"
                        class="textOption" name="textOption" type="text" value="${value}">`;
                    }
                    if (type === "template") {
                        insertar = `
                        <label for="templateOption">Seleccione la plantilla a aplicar:</label>
                        <select id="${id_input}" name="templateOption" class="templateOption">
                        <option value="1">Plantilla 1 </option>
                        <option value="2">Plantilla 2 </option>
                        <option value="3">Plantilla 3 </option>
                        <option value="4">Plantilla 4 </option>
                        <option value="5">Plantilla 5 </option>
                        </select>
                        `;
                    }
                    if (type === "comments") {
                        insertar = `
                        <label for="commentOption">Desea que se puedan moderar los comentarios:</label>
                        <select id="${id_input}" name="commentOption" class="commentOption">
                        <option value="0">Sin moderación</option>
                        <option value="1">Requerir aprobación de un administrador</option>
                        </select>
                        `;
                    }
                    if (type === "image") {
                        insertar = `<label for="imageOption">Selecciona un archivo:</label>
                        <input id="${id_input}"
                        name="value" type="file">`;
                    }

                    if (type === "point") {
                        insertar = `
                        <label for="pointOption">Seleccione un punto de interés:</label>
                        <select id="${id_input}" name="pointOption" class="pointOption">
                        <option value="1">Opción 1 <option/>
                        </select>
                        `;
                    }

                    $.ajax({
                        url: "/fetch-point",
                        dataType: "json",
                    }).done(function (response) {
                        $(".pointOption").html("");
                        $.each(response.pointofinterest, function (key, item) {

                            selected = "";

                            if (item.id == value) {
                                selected = "selected";
                            }

                            $(".pointOption").append(
                                `<option value="${item.id}" ${selected}>${item.id}. ${item.name}</option>`
                            );
                        });
                    });

                    return insertar;
                }

                /**
                 * Esta función se encarga de cargar la opción en el modal, según el tipo de opción. Muestra una previsualización de la opción tanto
                 * para saber que hay previamente en la base de datos o para comprobar que se haya modificado correctamente.
                 */
                function campoMostrar(value, type) {
                    let insertar = "";
                    if (type === "text") {
                        insertar = `<p> ${value} </p>`;
                    }

                    if (type === "template") {
                        insertar = `<p> Plantilla ${value} </p>`;
                    }
                    if (type === "comments") {
                        insertar = `<p> 0->Sin moderación <br>1->Los comentarios requieren aprobación<br>Actual=> ${value} </p>`;
                    }

                    if (type === "image") {
                        insertar = `<img src="${value}" class="p-1 bg-white border rounded max-w-sm">`;
                    }

                    if (type === "point") {
                        insertar = `<p class="pointparra"></p>`;

                        $.ajax({
                            url: "/fetch-onepoint/" + value,
                            dataType: "json",
                        }).done(function (response) {
                            $(".pointparra").html("");


                            $(".pointparra").text(
                                response.pointofinterest.name
                            );
                            $(".pointparra").append(
                                `<br><a class="underline" target="_blank" href="/pointofinterests/${value}">Ver punto</a>`
                            );
                        });
                    }

                    return insertar;
                }



                /**
                 * Se vacia la parte de previsualización y se carga el elemento seleccionado.
                 */
                $("#originalContent").html("");
                $("#originalContent").append(campoMostrar(valor, tipo));


                /**
                 * Se vacia la parte de edición y se carga el elemento seleccionado.
                 */
                $("#modifiedContent").html("");
                $("#modifiedContent").append(
                    `<form method="post" enctype="multipart/form-data id="formulario">`
                );

                $("#modifiedContent").append(campoEditar(valor, tipo));

                $("#controlesModal").html("");
                $("#controlesModal").append(`<button type="button"
                class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                data-bs-dismiss="modal">
                Cerrar
            </button>
            <button idOption="${id_option}" type="button" optionType="${tipo}"
                class="guardar guardar${tipo} inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                Guardar cambios
            </button>`);
                $("#modifiedContent").append(`</form>`);
            },
            error: function (response) {
                //console.log(response);
            },
        });
    }




    /**
     * Esta función se dispara cuando se pulsa el botón de guardar cambios. En función del tipo de dato en cuestión se tiene que guardar de una forma
     * o de otra. El tipo text, point o template se guardan como simple texto, lo más complejo es guardar imagenes que requiere un
     */
    $(document).on("click", ".guardar", function (e) {
        e.preventDefault();

        //Pruebas
        let type = $(this).attr("optionType");

        let id = $(this).attr("idOption");
        let idInput = "input" + id;
        let newValue;
        let formData = new FormData();



        if (type === "text" || type === "point" || type === "template" || type==="comments") {
            newValue = $("#" + idInput).val();
            //console.log(newValue);
        }

        if (type === "image") {


            formData.append("type", type);
            formData.append("value", $("#" + idInput)[0].files[0]);
            formData.append("_method", "put");

        }


        if (type == "image") {

            $.ajax({
                method: "POST",
                url: "/options/" + id,

                data: formData,
                _method: "put",
                cache: false,
                contentType: false,
                processData: false,
                error: function (data) {
                    //console.log(data);
                },
                success: function (data) {
                    loadOption(id);

                },
            });
        } else {
            $.ajax({
                url: "/options/" + id,
                //url: "{{ route(options.update) }}",
                type: "PUT",
                //processData: false,
                data: {
                    id: id,
                    value: newValue,
                    type: type,
                },

                success: function (response) {
                    loadOption(id);

                    if (response) {
                        //alert("HAY RESPUESTA");
                        //alert(response);
                    } else {
                        //alert("TODO CORRECTO HERMANO, AUNQUE NO HAY RESPUESTA");
                    }
                },
                error: function (response) {
                    alert("No has iniciado sesion");
                    //alert(id);
                },
            });
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


                townname = response.options[1].value;
                shortdescription = response.options[8].value;
                longdescription = response.options[9].value;
                point1 = response.options[11].value;
                point2 = response.options[12].value;
                point3 = response.options[13].value;
                coverpage = response.options[4].value;
                coverpage2 = response.options[14].value;
                //console.log("llega");
                $(".coverpage").css(
                    "background-image",
                    "url(" + coverpage + ")"
                );
                $(".coverpage2").css(
                    "background-image",
                    "url(" + coverpage2 + ")"
                );

                $(".townname").html("");
                $(".townname").text(townname);

                $(".shortdescription").html("");
                $(".shortdescription").text(shortdescription);

                $(".longdescription").html("");
                $(".longdescription").text(longdescription);

                id_inicial = point1;
                limite = 235;

                for (let index = 1; index < 4; index++) {
                    if (index != 1) {
                        limite = 85;
                    }

                    if (index == 2) {
                        id_inicial = point2;
                    }

                    if (index == 3) {
                        id_inicial = point3;
                    }

                    $(".pointname" + index).html("");
                    $(".pointshorttext" + index).html("");
                    //alert(point1);

                    $.ajax({
                        url: "/fetch-onepoint/" + id_inicial,
                        dataType: "json",
                    }).done(function (response) {

                        //alert(response.pointofinterest.name);
                        $(".pointname" + index).text(
                            response.pointofinterest.name
                        );
                        $(".pointshorttext" + index).append(
                            response.pointofinterest.text.substr(0, limite) +
                            " ..."
                        );
                        $(".pointlink" + index).attr(
                            "href",
                            "/pointofinterests/" + response.pointofinterest.id
                        );
                        $(".point" + index + "image").attr(
                            "src",
                            response.resources[0].route
                        );
                    });
                }
            },
            error: function (response) {
            },
        });
    }

    //OPTIMIZACION DE MAPAS
    window.dispatchEvent(new Event("resize"));
    function ESresize() {
        if (typeof Event === "function") {
            // modern browsers
            window.dispatchEvent(new Event("resize"));
        } else {
            //This will be executed on old browsers and especially IE
            var resizeEvent = window.document.createEvent("UIEvents");
            resizeEvent.initUIEvent("resize", true, false, window, 0);
            window.dispatchEvent(resizeEvent);
        }
    }
    $(window).trigger("resize");
});
