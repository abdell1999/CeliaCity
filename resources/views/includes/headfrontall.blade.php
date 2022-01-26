<div class="relative bg-white rounded shadow-lg py-5 px-7 mx-24 mt-5">
    <nav class="flex justify-center">
        <div class="flex items-center space-x-3 lg:pr-16 pr-6">
            <img class="cursor-pointer" width="34" height="34" src="{{asset('assets/img/icons/village.svg')}}">
            <h2 class="font-normal text-2xl leading-6 text-gray-800">Purullena</h2>
            <ul class="hidden md:flex flex-auto space-x-2">
                <li onclick="selected()"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                    Inicio</li>

                @php
                    $categoriesS = $categoriesS->toArray();
                    //print_r($categoriesS);
                    //echo "HOLA MUNDO";
                @endphp

                @foreach ($categoriesS as $categorieS)
                <li onclick="selected()"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                    <a href="{{ route('categories.show', $categorieS["id"]) }} ">{{$categorieS["name"]}}</a></li>
                @endforeach
                <li onclick="selected()"
                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                    Iniciar Sesion</li>
            </ul>
        </div>
    </nav>
</div>
<!-- For medium and plus sized devices -->
<!-- for smaller devcies md -->
<div class="block md:hidden m-5 left-1/4">
    <div class="px-4 py-3 text-white bg-indigo-600 rounded flex justify-between items-center w-full left-1/4">
        <div class="flex space-x-2">
            <span id="s1" class="font-semibold text-sm leading-3 hidden">Selecciona: </span>
            <button onclick="showList()" id="dropDown"
                class="font-normal text-sm leading-3 focus:outline-none hover:bg-gray-800 duration-100">Home
            </button>
        </div>
        <button onclick="showList()" id="dropDown"><img
                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-1-svg4.svg"
                alt="down arrow" /></button>
    </div>
    <div class="relative">
        <ul id="list" class="hidden font-normal text-base leading-4 absolute top-2  w-full rounded shadow-md">
            @foreach ($categoriesS as $categorieS)
            <li onclick="selectedSmall()"
                class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                <a href="">{{$categorieS["name"]}}</a></li>
               @endforeach
            <li onclick="selectedSmall()"
                class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                Iniciar Sesion</li>
        </ul>
    </div>
</div>
