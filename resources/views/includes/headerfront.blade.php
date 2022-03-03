<section class="header_area">
    <div class="header_navbar sticky" id="barraNav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="/assets/img/logo.svg" style="width: 80%; height: 80%;" type="image/svg" alt="Logo">
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
                                <li class="nav-item">
                                    <a class="page-scroll" href="/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="/guide">Guia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="/categories/1">Monumentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="/categories/2">Hostelería</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="/categories/3">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="/team">Créditos</a>
                                </li>
                                @if (Auth::guest())
                                <li class="nav-item">
                                    <a class="page-scroll" href="#" data-toggle="modal" data-target="#registerModal">Registro</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="page-scroll" href="/myprofile/{{Auth::user()->id}}">Mi perfil</a>
                                </li>
                                @endif
                                @if (Auth::guest())
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                                    </li>
                                    @else

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#" id="logoutBtn" >Cerrar sesión</a>
                                    </li>

                                    @endif
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->
</section>
