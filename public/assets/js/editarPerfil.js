
    $("#editname").click(function(){
        $("#name").prop("disabled",false);
    });
    $("#editsurname1").click(function(){
        $("#surname1").prop("disabled",false);
    });
    $("#editsurname2").click(function(){
        $("#surname2").prop("disabled",false);
    });
    $("#editaddress").click(function(){
        $("#address").prop("disabled",false);
    });
    $("#editemail").click(function(){
        $("#email").prop("disabled",false);
    });
    $("#editphone").click(function(){
        $("#phone").prop("disabled",false);
    });
    $("#editmovilphone").click(function(){
        $("#movilphone").prop("disabled",false);
    });
    $("#editborndate").click(function(){
        $("#borndate").prop("disabled",false);
    });






    $("#surname1").dblclick(function (){
        $(this).html("<input class='appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror id='name' name='name' type='text''>");

    });
    $("#apellido2").dblclick(function (){
        $(this).html("<input class='appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror id='name' name='name' type='text''>");

    });
    $("#direccion").dblclick(function (){
        $(this).html("<input class='appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror id='name' name='name' type='text''>");

    });
    $("#correo").dblclick(function (){
        $(this).html("<input class='appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror id='name' name='name' type='text''>");

    });
    $("#telefono").dblclick(function (){
        $(this).html("<input class='appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror id='name' name='name' type='text''>");

    });
    $("#fecha").dblclick(function (){
        $(this).html("<input class='appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror id='name' name='name' type='text''>");

    });

