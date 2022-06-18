<link rel="stylesheet" href="/assets/plantilla2/css/main.css" />
<noscript>
    <link rel="stylesheet" href="/assets/plantilla2/css/noscript.css" />
</noscript>
<!-- Header -->


<header id="header" class="alt">
    <h1><a href="/" class="townname">...</a></h1>
    <nav id="nav">
        <ul>
            <li class="special">
                <a href="#menu" class="menuToggle"><span>Menu</span></a>
                <div id="menu">
                    <ul id="nav2">
                        <li><a href="/">Inicio</a></li>


                    </ul>

                    <ul>
                        @if (Auth::guest())
                            <li><a href="#" data-toggle="modal" data-target="#registerModal">Registrarse</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#loginModal">Acceder</a></li>
                        @else
                            <li><a href="/myprofile/{{ Auth::user()->id }}">Mi perfil</a>
                            <li><a href="#" id="logoutBtn">Cerrar Sesión</a></li>
                        @endif
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>
<header id="header">
    <h1><a href="/" class="townname">...</a></h1>
    <nav id="nav">
        <ul>
            <li class="special">
                <a href="#menu" class="menuToggle"><span>Menu</span></a>

            </li>
        </ul>
    </nav>
</header>

<script src="/assets/plantilla2/js/jquery.min.js"></script>
<script src="/assets/plantilla2/js/jquery.scrollex.min.js"></script>
<script src="/assets/plantilla2/js/jquery.scrolly.min.js"></script>
<script src="/assets/plantilla2/js/browser.min.js"></script>
<script src="/assets/plantilla2/js/breakpoints.min.js"></script>
<script src="/assets/plantilla2/js/util.js"></script>
<script src="/assets/plantilla2/js/main.js"></script>
<script src="/assets/js/categoriesNavMenu.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
