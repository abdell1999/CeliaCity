$(document).ready(function(){
    $("#nombre").dblclick(function (){
        $(this).html("<input class='appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name') border-red-500 @enderror id='name' name='name' type='text''>");

    });

});