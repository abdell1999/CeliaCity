<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- css -->
    <link href="/assets/plantilla5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plantilla5/css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/plantilla5/css/tiny-slider.css" />

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top sticky" id="navbar" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand" href="/" style="display: flex; align-items: center; padding-right: 5%;">
                <img src="https://img.icons8.com/external-wanicon-two-tone-wanicon/64/undefined/external-maps-adventure-wanicon-two-tone-wanicon.png"
                    style="width: 80%; height: 80%;" type="image/svg" alt="Logo">

                <h4 style="padding-left:5%; color: #50C594;">{{ $dataoptions['townname'] }}</h4>
            </a>
            <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-center me-auto mt-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>


                    @foreach ($dataoptions['categories'] as $category)
                        @if ($category->id == 4)
                            <li class="nav-item">
                                <a class="nav-link" href="/guide">{{ $category->name }} </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/categories/{{ $category->id }}">{{ $category->name }}
                                </a>
                            </li>
                        @endif
                    @endforeach




                </ul>
                <div class="mb-4 mb-lg-0">
                    @if (Auth::guest())
                        <a data-toggle="modal" data-target="#loginModal"
                            class="btn btn-sm nav-btn btn-primary mb-4 mb-lg-0 ms-auto">Iniciar
                            Sesion</a>
                        <a href="#" data-toggle="modal" data-target="#registerModal" href="#"
                            class="btn btn-sm nav-btn btn-primary mb-4 mb-lg-0 ms-auto">Registrarse</a>
                    @else
                        <a href="/myprofile/{{ Auth::user()->id }}"
                            class="btn btn-sm nav-btn btn-primary mb-4 mb-lg-0 ms-auto">Mi Perfil</a>
                        <a href="#" role="button" class="btn btn-sm nav-btn btn-primary mb-4 mb-lg-0 ms-auto"
                            id="logoutBtn">Cerrar Sesión</a>
                    @endif
                </div>
            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
