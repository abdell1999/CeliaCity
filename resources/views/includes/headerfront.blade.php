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
                            <ul id="nav-1" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="page-scroll"  href="/home">Inicio</a>
                                </li>

                                @foreach ($dataoptions['categories'] as $category)

                                @if ($category->id == 4)
                                <li class="nav-item">
                                    <a class="page-scroll" href="/guide">{{$category->name}} </a>
                                </li>

                                @else

                                <li class="nav-item">
                                    <a class="page-scroll" href="/categories/{{$category->id}}">{{$category->name}} </a>
                                </li>
                                @endif
                                @endforeach


                            </ul>
                            <ul class="navbar-nav ml-auto">
                                                        @if (Auth::guest())
                                <li class="nav-item">
                                    <a class="page-scroll" href="#" data-toggle="modal" data-target="#registerModal">Registrarse</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="page-scroll" href="/myprofile/{{Auth::user()->id}}">Mi perfil</a>
                                </li>
                                @endif
                                @if (Auth::guest())
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#loginModal">Iniciar Sesión</a>
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
