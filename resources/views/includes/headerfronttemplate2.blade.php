<link rel="stylesheet" href="/assets/plantilla2/css/main.css" />
<noscript><link rel="stylesheet" href="/assets/plantilla2/css/noscript.css" /></noscript>
    <!-- Header -->


    <header id="header" class="alt">
        <h1><a href="/" class="townname">...</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/guide">Guía Turística</a></li>
                            <li><a href="/categories/1">Monumentos</a></li>
                            <li><a href="/categories/2">Hostelería</a></li>
                            <li><a href="/categories/3">Servicios</a></li>
                            <li><a href="#">Registrarse</a></li>
                            <li><a href="#">Acceder</a></li>
                            <li><a href="#">Cerrar Sesión</a></li>
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
    <script>

        $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });


        </script>
