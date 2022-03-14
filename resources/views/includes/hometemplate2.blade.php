@extends('layouts.frontlayout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/options.js"></script>

@section('content')

<body class="landing is-preload">

    <!-- Page Wrapper -->
        <div id="page-wrapper">



            <!-- Banner -->
                <section id="banner" class="coverpage">
                    <div class="inner">
                        <h2 class="townname">...</h2>
                        <p class="shortdescription">Macael es un municipio español de la provincia de Almería, Andalucía. En el año 2017 contaba con 5576 habitantes. Su extensión superficial es de 44 km² y tiene una densidad de 138,4 hab/km².</p>
                        <ul class="actions special">
                            <li><a href="/guide" class="button primary">Guía</a></li>
                        </ul>
                    </div>
                    <a href="#one" class="more scrolly">Más información</a>
                </section>

            <!-- One -->
                <section id="one" class="wrapper style1 special">
                    <div class="inner">
                        <header class="major">
                            <h2>Más información sobre<br />
                            <span class="townname"></span></h2>
                            <p class="longdescription">Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
                            fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
                        </header>

                    </div>
                </section>

            <!-- Two -->
                <section id="two" class="wrapper alt style2">
                    <section class="spotlight">
                        <div class="image point1image"><img src="/assets/plantilla2/images/pic01.jpg" alt="" /></div><div class="content">
                            <h2 class="pointname1">Nombre del primer punto</h2>
                            <p class="pointshorttext1">Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                            <a href="#" class="more pointlink1">Leer más</a>
                        </div>
                    </section>
                    <section class="spotlight">
                        <div class="image point2image"><img src="/assets/plantilla2/images/pic02.jpg" alt="" /></div><div class="content">
                            <h2 class="pointname2">Nombre del segundo elementum magna</h2>
                            <p class="pointshorttext2">Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                            <a href="#" class="more pointlink2">Leer más</a>
                        </div>
                    </section>
                    <section class="spotlight">
                        <div class="image point3image"><img src="/assets/plantilla2/images/pic03.jpg" alt="" /></div><div class="content">
                            <h2 class="pointname3">Nombre del tercer punto</h2>
                            <p class="pointshorttext3">Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
                            <a href="#" class="more pointlink3">Leer más</a>
                        </div>
                    </section>
                </section>


            <!-- Footer -->
                <footer id="footer">
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                    <ul class="copyright">
                        <li>&copy; CeliaCity</li></ul>
                </footer>

        </div>

    <!-- Scripts -->
        <script src="/assets/plantilla2/js/jquery.min.js"></script>
        <script src="/assets/plantilla2/js/jquery.scrollex.min.js"></script>
        <script src="/assets/plantilla2/js/jquery.scrolly.min.js"></script>
        <script src="/assets/plantilla2/js/browser.min.js"></script>
        <script src="/assets/plantilla2/js/breakpoints.min.js"></script>
        <script src="/assets/plantilla2/js/util.js"></script>
        <script src="/assets/plantilla2/js/main.js"></script>

</body>


@endsection
