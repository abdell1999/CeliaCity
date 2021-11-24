<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</head>
<body>
@if (Auth::guest())
@else
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a
                class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Pagina Principal</span></a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="profile.html"><i class="fas fa-user"></i><span>Perfil</span></a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                        role="button" aria-expanded="false"><i
                            class="fas fa-columns"></i><span>Cruds</span></a>
                    <ul class="dropdown-menu bg-primary">
                        <li><a class="dropdown-item text-white" href="#">Usuarios</a></li>
                        <li><a class="dropdown-item text-white" href="#">Categoria</a></li>
                        <li><a class="dropdown-item text-white" href="#">Punto de Interes</a></li>
                        <li><a class="dropdown-item text-white" href="#">Separated link</a></li>
                    </ul>
                </li>

            </ul>


            <div class="text-center d-none d-md-inline">
                <form  action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Cerrar Sesión">
                </form>
            </div>
        </div>

    </nav>

@endif


<div class="d-flex flex-column" id="content-wrapper">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>


</div>
</body>
</html>
