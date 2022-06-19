<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title> </title>
    <!-- inlcude google cabin font cdn link -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- inlcude google nunito font cdn link -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital@0;1&display=swap" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="/assets/plantilla4/css/bootstrap.css">
    <!-- include the site fontawesome stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="/assets/plantilla4/style.css">
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="/assets/plantilla4/css/colors.css">
    <!-- include the site responsive stylesheet -->
    <link rel="stylesheet" href="/assets/plantilla4/css/responsive.css">
    <!-- include bootstrap popper JavaScript -->
    <script src="/assets/plantilla4/js/popper.min.js"></script>
    <!-- include bootstrap JavaScript -->
    <script src="/assets/plantilla4/js/bootstrap.min.js"></script>
    <!-- include custom JavaScript -->
    <script src="/assets/plantilla4/js/jqueryCustom.js"></script>
    <!-- isotope JavaScript -->
    <script src='https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<div class="phTopWrap">
    <!-- pageHeader -->
    <header id="pageHeader">
        <!-- sticky-wrap-headerFixer -->
        <div class="sticky-wrap-headerFixer bg-white w-100">
            <div class="headerFixer">
                <div class="container clearfix align-items-center">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center py-3 py-md-0">
                            <!-- mainLogo -->
                            <div class="logo mt-md-n2 mt-xl-n1">
                                <a href="/">
                                    <img src="/assets/img/logo.svg"
                                        style="max-width: 150% !important; width: 100% !important; height: 150% !important;"
                                        type="image/svg" alt="Logo">
                                </a>
                            </div>
                            <!-- menuHolder -->
                            <div class="d-flex menuHolder justify-content-end align-items-center flex-grow-1">
                                <!-- navbar -->
                                <nav
                                    class="navbar navbar-expand-md navbar-dark navHolder navbar-light p-0 position-static">
                                    <div class="collapse navbar-collapse navCollapse" id="navBarOpener">
                                        <!-- navbar-nav -->
                                        <ul class="navbar-nav mr-auto pageMainNavigation">
                                            <li class="nav-item">
                                                <a class="nav-link" role="button" aria-haspopup="true"
                                                    aria-expanded="false" href="/home">Inicio</a>
                                            </li>


                                            @foreach ($dataoptions['categories'] as $category)

                                @if ($category->id == 4)
                                <li class="nav-item">
                                    <a class="nav-link" href="/guide">{{$category->name}} </a>
                                </li>

                                @else

                                <li class="nav-item">
                                    <a class="nav-link" href="/categories/{{$category->id}}">{{$category->name}} </a>
                                </li>
                                @endif
                        @endforeach









                                            @if (Auth::guest())
                                                <li class="nav-item">
                                                    <a class="nav-link" role="button" href="#"
                                                        data-toggle="modal" data-target="#registerModal">Registrarse</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" role="button" aria-haspopup="true"
                                                        aria-expanded="false" href="#" data-toggle="modal"
                                                        data-target="#loginModal">Iniciar
                                                        Sesion</a>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a class="nav-link " role="button" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        href="/myprofile/{{ Auth::user()->id }}">Mi Perfil</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" role="button" aria-haspopup="true"
                                                        aria-expanded="false" id="logoutBtn" href="#">Cerrar
                                                        Sesion</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <button class="navbar-toggler navOpener ml-2" type="button" data-toggle="collapse"
                                        data-target="#navBarOpener" aria-controls="navBarOpener" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
