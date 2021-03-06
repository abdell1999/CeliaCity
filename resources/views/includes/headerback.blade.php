<nav id="header" class="bg-gray-900 fixed w-full z-10 top-0 shadow">

    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

        <div class="w-1/2 pl-2 md:pl-0">
            <a class="text-gray-100 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                <i class="fas fa-moon text-blue-400 pr-3"></i> Celia City
            </a>
        </div>
        @auth
        <div class="w-1/2 pr-0">
            <div class="flex relative inline-block float-right">

                <div class="relative text-sm text-gray-100">
                    <button id="userButton" class="flex items-center focus:outline-none mr-3">
                        <!--Foto de usuario -->
                        <img class="w-8 h-8 rounded-full mr-4" src="{{ url(Auth::user()->photo) }}" alt="Avatar of User">
                        <span class="hidden md:inline-block text-gray-100">Hola, {{ Auth::user()->name; }}</span>
                        <i class="fas fa-sort-down pl-2"></i>
                    </button>
                    <div id="userMenu"
                        class="bg-gray-900 rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                        <ul class="list-reset">
                            <li><a href="myprofile/{{Auth::user()->id}}"
                                    class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline">My account</a></li>
                            <li>
                                <hr class="border-t mx-2 border-gray-400">
                            </li>
                            <li><form  action="{{ route('logout') }}" method="POST" >
                                        @csrf

                                        <input class="px-4 py-2 block text-gray-100 hover:bg-gray-800 no-underline hover:no-underline" type="submit" value="Cerrar Sesión">

                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>
        @endauth



                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle"
                        class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-900 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                <li class="mr-6 my-2 md:my-0">
                    <a href="{{ route('home') }}"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                        <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Inicio</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="{{ route('options') }}"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                        <i class="fas fa-cog fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Opciones</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="{{ route('users.index') }}"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                        <i class="fas fa-users fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Usuarios</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="{{ route('categories.index') }}"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-pink-400">
                        <i class="fas fa-columns fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Categorias</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="/points"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-purple-400">
                        <i class="fas fa-map-marked-alt fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Puntos de
                            Interes</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="{{ route('comments.index') }}"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-purple-400">
                        <i class="fas fa-comments fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Comentarios</span>
                    </a>
                </li>
                <li class="mr-6 my-2 md:my-0">
                    <a href="{{ route('resources.index') }}"
                        class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-100 border-b-2 border-gray-900  hover:border-purple-400">
                        <i class="far fa-images fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Recursos</span>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>

<script>


    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");
    //var userMenuDiv = document.getElementById("menu");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //User Menu
        if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else { userMenuDiv.classList.add("invisible"); }
            } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
            }
        }

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else { navMenuDiv.classList.add("hidden"); }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) { return true; }
            t = t.parentNode;
        }
        return false;
    }


</script>

