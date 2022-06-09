  
     <!-- Bootstrap -->
     <link href="/assets/plantilla3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <!-- Icon -->
            <link href="/assets/plantilla3/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
            <link href="/assets/plantilla3/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />          
            <!-- SLICK SLIDER -->
            <link rel="stylesheet" href="/assets/plantilla3/css/tiny-slider.css"/> 
            <!-- Custom Css -->
            <link href="/assets/plantilla3/css/style.min.css" rel="stylesheet" type="text/css" />
    

            <body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="20">
        <!-- Loader Start -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- Loader End -->
  
  
  <!-- Navbar Start -->
  <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
			    <a class="navbar-brand townname" href="#">Macael</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
			    </button><!--end button-->

			    <div class="collapse navbar-collapse" id="navbarCollapse">
			        <ul id="navbar-navlist" class="navbar-nav ms-auto">
			            <li class="nav-item">
			                <a class="nav-link active" href="/home">Inicio</a>
			            </li><!--end nav item-->
			            <li class="nav-item">
			                <a class="nav-link" href="/guide">Guia</a>
			            </li><!--end nav item-->
			            <li class="nav-item">
			                <a class="nav-link" href="/categories/1">Momumentos</a>
			            </li><!--end nav item-->
			            <li class="nav-item">
			                <a class="nav-link" href="/categories/2">Servicios</a>
			            </li><!--end nav item-->
                        <li class="nav-item">
			                <a class="nav-link" href="/categories/3">Servicios</a>
			            </li><!--end nav item-->
			            <li class="nav-item">
			                <a class="nav-link" href="/team">Creditos</a>
			            </li><!--end nav item-->
                        @if (Auth::guest())
			            <li class="nav-item">
			                <a class="nav-link" href="/login">Login</a>
			            </li><!--end nav item-->
			            <li class="nav-item">
			                <a class="nav-link" href="/register">Registro</a>
			            </li><!--end nav item-->
                        @else
                        <li class="nav-item">
			                <a class="nav-link" href="/myprofile/{{Auth::user()->id}}">Mi perfil</a>
			            </li><!--end nav item-->
			            <li class="nav-item">
			                <a class="nav-link" href="#" id="logoutBtn">Cerrar Sesión</a>
			            </li><!--end nav item-->
                        @endif
			        </ul><!--end navbar nav-->
			    </div><!--end collapse-->
		    </div><!--end container-->
		</nav><!--end navbar-->
        <!-- Navbar End -->

         <!-- javascript -->
      <script src="/assets/plantilla3/js/bootstrap.bundle.min.js"></script>
      <!-- SLIDER -->
      <script src="/assets/plantilla3/js/tiny-slider.js "></script>
      <!-- Contact -->
      <script src="/assets/plantilla3/js/contact.js"></script>
      <!-- Main Js -->
      <script src="/assets/plantilla3/js/app.js"></script>

     