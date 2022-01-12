<style>
    body {
        margin: 0;
        background-color: black;
    }

    .video-wrapper {
        width: 100vw;
        height: 100vh;
        position: relative;
        overflow: hidden;
        z-index: 0;

    }

    .videos {
        object-fit: cover;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
    }
</style>

<div class="video-wrapper">
    <div class="videos">
        <div id="carousel" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active float-left w-full">
                    <img src="{{asset('assets/img/purullena.jpg')}}" class="block w-full" alt="Wild Landscape" />
                </div>
                <div class="carousel-item float-left w-full">
                    <img src="{{asset('assets/img/purullena1.jpeg')}}" class="block w-full" alt="Camera" />
                </div>
                <div class="carousel-item float-left w-full">
                    <video autoplay muted loop id="videop">
                        <source src="{{asset('assets/img/video/purullena.mp4')}}">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <div class="relative bg-white rounded shadow-lg py-5 px-7 m-5">
        <nav class="flex justify-center">
            <div class="flex items-center space-x-3 lg:pr-16 pr-6">
                <img class="cursor-pointer" width="34" height="34" src="{{asset('assets/img/icons/village.svg')}}">
                <h2 class="font-normal text-2xl leading-6 text-gray-800">Purullena</h2>
                <ul class="hidden md:flex flex-auto space-x-2">
                    <li onclick="selected()"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                        Home</li>
                    @foreach ($categories as $categorie)
                    <li onclick="selected()"
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-base leading-3 shadow-md rounded">
                        <a href="{{ route('categories.show', $categorie->id) }}">{{$categorie->name}}</a></li>
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
                @foreach ($categories as $categorie)
                <li onclick="selectedSmall()"
                    class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                    <a href="">{{$categorie->name}}</a></li>
                   @endforeach
                <li onclick="selectedSmall()"
                    class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-sm leading-3 font-normal">
                    Iniciar Sesion</li>
            </ul>
        </div>
    </div>

    <!-- for smaller devcies sm-->
    <div class="invisible md:visible" style="position: relative;
    top: 10%;">
        <div class=" font-serif text-bold md:text-6xl text-5xl text-center text-white" id="titulo">Bienvenido a
        </div>
        <div class="font-serif text-bold md:text-9xl text-5xl text-center text-white">Purullena</div>
    </div>
</div>
</header>
<section>
    <header>
        <div class="text-white">MAPA TURISTICO INTERACTIVO o lo que querais</div>
    </header>

</section>

<script>
    function showList() {
        document.getElementById('list').classList.toggle('hidden');
    }
</script>
