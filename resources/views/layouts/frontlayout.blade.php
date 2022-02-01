<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('includes.frontlibraries')

@yield('scripts')

    <header class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.svg" alt="logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#guia">Guia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#monumentos">Monumentos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#hosteleria">Hostelería</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#comercios">Comercios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#Ocio">Ocio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Porsiacaso</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{route('login')}}">Login</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
    </header>

</head>
<body>
@yield('content')
</body>
</html>
