@extends('layouts.frontlayout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/options.js"></script>

@section('content')
    <style>
        #cover {
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: #141526;
            z-index: 9999;
            font-size: 65px;
            text-align: center;
            padding-top: 200px;
            color: #fff;
            font-family: tahoma;
        }

        .wrap {
            text-align: center;
            vertical-align: middle;
            margin-bottom: 100px;
            border-radius: 4px;
            padding-bottom: 100px;
        }

        .track {
            display: inline-block;
            width: 350px;
            height: 0;
            border-top: 8px dotted #ddd;
        }

        .ghosts {
            display: block;
            position: relative;
            top: 0px;
            backgound-color: #fff;
        }

        .ghosts .ghost-1,
        .ghosts .ghost-2 {
            display: block;
            position: absolute;
            width: 45px;
            height: 55px;
            border-top-left-radius: 50%;
            border-top-right-radius: 50%;
            top: -35px;
        }

        .ghosts .ghost-1 .foot-1,
        .ghosts .ghost-1 .foot-2,
        .ghosts .ghost-1 .foot-3,
        .ghosts .ghost-2 .foot-1,
        .ghosts .ghost-2 .foot-2,
        .ghosts .ghost-2 .foot-3 {
            transform: rotate(45deg);
            display: block;
            position: absolute;
            width: 13px;
            height: 13px;
            background-color: #141526;
            border-radius: 2px;
            top: 51px;
        }

        .ghosts .ghost-1:before,
        .ghosts .ghost-1:after,
        .ghosts .ghost-2:before,
        .ghosts .ghost-2:after {
            content: "";
            display: block;
            position: absolute;
            width: 5px;
            height: 5px;
            background-color: blue;
            border: 4px solid #fff;
            border-radius: 50%;
            top: 13px;
        }

        .ghosts .ghost-1 {
            background-color: #01dbd7;
            left: -40px;
        }

        .ghosts .ghost-1 .foot-1 {
            left: 1px;
        }

        .ghosts .ghost-1 .foot-2 {
            left: 16px;
        }

        .ghosts .ghost-1 .foot-3 {
            left: 30px;
        }

        .ghosts .ghost-1:before {
            left: 15px;
        }

        .ghosts .ghost-1:after {
            left: 30px;
        }

        .ghosts .ghost-2 {
            background-color: #fe2601;
            left: 100%;
            margin-left: -5px;
        }

        .ghosts .ghost-2 .foot-1 {
            left: 1px;
        }

        .ghosts .ghost-2 .foot-2 {
            left: 16px;
        }

        .ghosts .ghost-2 .foot-3 {
            left: 30px;
        }

        .ghosts .ghost-2:before {
            left: 2px;
        }

        .ghosts .ghost-2:after {
            left: 18px;
        }

        .pacman {
            width: 0px;
            height: 0px;
            position: relative;
            top: 0px;
            animation: movepacman 3.5s linear infinite;
        }

        .loader {
            display: inline-block;
            position: relative;
        }

        .loader .topchomp,
        .loader .bottomchomp {
            display: block;
            position: absolute;
            width: 0px;
            height: 0px;
            border: 30px solid #fef200;
            border-radius: 50%;
            top: -48px;
        }

        .loader .topchomp {
            border-right-color: transparent;
            animation: topchomp 0.3s linear infinite;
        }

        .loader .topchomp:before {
            content: "";
            display: block;
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            top: -22px;
            left: -5px;
            z-index: 999;
        }

        .loader .bottomchomp {
            border-top-color: transparent;
            border-right-color: transparent;
            animation: bottomchomp 0.3s linear infinite;
        }

        @keyframes topchomp {

            0%,
            100% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(45deg);
            }
        }

        @keyframes bottomchomp {

            0%,
            100% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(-45deg);
            }
        }

        @keyframes movepacman {
            0% {
                left: 17%;
            }

            45% {
                left: 83%;
                transform: rotateY(0deg);
            }

            50% {
                left: 83%;
                transform: rotateY(180deg);
            }

            95% {
                left: 17%;
                transform: rotateY(180deg);
            }

            100% {
                left: 17%;
                transform: rotateY(0deg);
            }
        }
    </style>
    <script>
        $(window).on('load', function() {
            $("#cover").fadeOut(4000);
        });
    </script>
    <div id="cover">
        <div class="wrap">
            <h1 style="padding-bottom:10%; font-size:100%; color:#eec41e;"><span>Celia City</span></h1>
            <div class="track">
                <div class="ghosts">
                    <div class="ghost-1">
                        <div class="foot-1"></div>
                        <div class="foot-2"></div>
                        <div class="foot-3"></div>
                    </div>
                    <div class="ghost-2">
                        <div class="foot-1"></div>
                        <div class="foot-2"></div>
                        <div class="foot-3"></div>
                    </div>
                </div>
                <div class="pacman-shadow"></div>
                <div class="pacman" style="padding-top: 12px;">
                    <div class="loader">
                        <div class="topchomp"></div>
                        <div class="bottomchomp"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="home" class="header_slider">
        <div class="single_slider bg_cover d-flex align-items-center coverpaged"
            style="background-image: url({{ $dataoptions['coverpage'] }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="slider_content">
                            <h2 class="slider_title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Bienvenido a <span class="townnamed">{{ $dataoptions['townname'] }}</span></h2>
                            <p class="wow fadeInLeftBig shortdescriptiond" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                {{ $dataoptions['shortdescription'] }}</p>
                            <a href="/guide" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s"
                                data-wow-delay="0.8s">Guía Turística</a>
                        </div> <!-- slider content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </div> <!-- header slider -->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-130 pb-50">
        <div class="about_wrapper">
            <div class="about_image bg_cover coverpage2d" style="background-image: url({{ $dataoptions['coverpage2'] }})">
            </div>
            <!-- about image -->
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="section_title">
                                <h3 class="title">Más información <br> sobre <span class="townname">TOWNNAME</span></h3>
                                <p class="longdescription">LONGDESCRIPTION</p>
                            </div> <!-- section title -->
                            <a href="javascript:void(0)" class="main-btn">Guía Turística</a>
                        </div> <!-- about content -->
                        <!-- about_counter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- about wrapper -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog_area pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h3 class="title">Puntos destacados</h3>
                        <p>Aquí tienes los tres puntos más destacados de <span class="townname">TOWNNAME</span>:</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_blog mt-30">
                        <div class="blog_image">
                            <img src="assets/img/CuestaNegro.png" class="point1image" alt="blog">
                        </div>
                        <div class="blog_content">

                            <h4 class="blog_title pointname1">POINT1</h4>
                            <p class="pointshorttext1">POINT1 SHORT TEXT</p>
                            <a href="#" class="more pointlink1">Leer más</a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-6">
                    <div class="single_blog d-sm-flex mt-30">
                        <div class="blog_image" style="height:200px; width:200px;">
                            <img src="assets/img/Iglesia.jpg" class="point2image" style="overflow:hidden; height: 100%;"
                                alt="blog">
                        </div>
                        <div class="blog_content blog_content_2 media-body">
                            <h4 class="blog_title pointname2">POINT2</h4>
                            <p class="pointshorttext2">POINT2 SHORT TEXT</p>
                            <a href="#" class="more pointlink2">Leer más</a>
                        </div>
                    </div> <!-- single blog -->

                    <div class="single_blog d-sm-flex mt-30">
                        <div class="blog_image" style="height:200px; width:200px;">
                            <img src="assets/img/CuevaInmaculada.jpg" class="point3image"
                                style="overflow:hidden; height: 100%;" alt="blog">
                        </div>
                        <div class="blog_content blog_content_2 media-body">
                            <h4 class="blog_title pointname3">POINT3</h4>
                            <p class="pointshorttext3">POINT2 SHORT TEXT</p>
                            <a href="#" class="more pointlink3">Leer más</a>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->
@endsection
