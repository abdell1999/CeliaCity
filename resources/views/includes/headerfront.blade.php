<style>
    body {
        margin: 0;
    }

    video {
        z-index: -1;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        height: 100% !important;
        width: 100%;
    }

    .video-wrapper {
        width: 100%;
        height: 100%;
        position: relative;
        /*overflow-x: hidden;
        overflow-y: visible;*/
    }
</style>

    <div class="video-wrapper">
        <video autoplay muted loop id="videop">
            <!-- PONER DIRECCION DEL VIDEO -->
            <source src="{{asset('assets/img/video/purullena.mp4')}}">
        </video>
        <div class="relative bg-white rounded shadow-lg py-5 px-7 m-5">
            <nav class="flex justify-center">
                <div class="flex items-center space-x-3 lg:pr-16 pr-6">
                    <img class="cursor-pointer" width="34" height="34" src="{{asset('assets/img/icons/village.svg')}}">
                    <h2 class="font-normal text-2xl leading-6 text-gray-800">Purullena</h2>
                    <ul class="hidden md:flex flex-auto space-x-2">
                        <li onclick="selected()"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                            Home</li>
                        <li onclick="selected()"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                            Guia Turistica</li>
                        <li onclick="selected()"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                            Historia</li>
                        <li onclick="selected()"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                            Restaurantes</li>
                        <li onclick="selected()"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                            Monumentos</li>
                        <li onclick="selected()"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                            Monumentos</li>
                        <li onclick="selected()"
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                            Mas</li>
                    </ul>
                </div>
        </div>
        <!-- For medium and plus sized devices -->
        </nav>
        <!-- for smaller devcies md -->
        <div class="block md:hidden w-full mt-5 left-1/4">
            <div
                class="px-4 py-3 text-white bg-indigo-600 rounded flex justify-between items-center w-full left-1/4">
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
                <ul id="list"
                    class="hidden font-normal text-base leading-4 absolute top-2  w-full rounded shadow-md">
                    <li onclick="selectedSmall()"
                        class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                        Guia Turistica</li>
                    <li onclick="selectedSmall()"
                        class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                        Historia</li>
                    <li onclick="selectedSmall()"
                        class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                        Restaurantes</li>
                    <li onclick="selectedSmall()"
                        class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                        Monumentos</li>
                    <li onclick="selectedSmall()"
                        class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                        Monumentos</li>
                    <li onclick="selectedSmall()"
                        class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                        Mas</li>
                </ul>
            </div>
        </div>
        <!-- for smaller devcies sm-->
        <div class="font-serif text-bold md:text-6xl text-5xl text-center text-white">Bienvenido a <br> Purullena
        </div>
    </div>

    <script>
        function showList() {
            document.getElementById('list').classList.toggle('hidden');
        }
    </script>
