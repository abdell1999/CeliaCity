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

    <!-- start hero -->
    <section class="hero-4 position-relative d-flex align-items-center justify-content-center overflow-hidden"
        id="home">
        <img class="hero-4-bg" src="{{ $dataoptions['coverpage'] }}" style="height: 100%; width:100% ;" alt="">
        <div class="hero-4-bg position-relative"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <h4 class="text-white fs-24 text-uppercase fw-normal subtitle">Bienvenido a</h4>
                    <h1 class="hero-4-title text-uppercase text-white">{{ $dataoptions['townname'] }}</h1>
                    <p class="text-muted mb-4 pb-2" style="color: white !important;">
                        {{ $dataoptions['shortdescription'] }}
                    </p>
                    <div>
                        <button class="btn btn-primary d-inline-block me-2"
                            onclick="window.location.href='/guide'">Historia</button>
                    </div>
                </div>


            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end hero -->

    <!-- start feature -->
    <section class="section bg-light overflow-hidden" id="feature">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-lg-6 mt-lg-0 mt-5 pt-lg-0 pt-4">
                    <h3 class="fw-semibold lh-base mb-4">Más información
                        sobre {{ $dataoptions['townname'] }}</h3>
                    <h6 class="text-muted fw-normal">{{ $dataoptions['longdescription'] }}
                    </h6>

                </div>
                <div class="col-lg-6">
                    <img class="rounded" style="max-width: 120%; position: relative;"
                        src="{{ $dataoptions['coverpage2'] }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end feature -->

    <!-- start services -->
    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 mb-4">
                    <h4 class="fw-semibold mb-3">Puntos destacados</h4>
                    <h5 class="text-muted fw-normal">Aquí tienes los tres puntos más destacados de <span
                            class="townname">TOWNNAME</span>:

                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="service rounded px-4 py-md-5 py-3">
                        <img src="../../cuidar/images/CuestaNegro.png" style="max-width: 100%; position: relative;"
                            class="rounded point1image">

                        <h6 class="my-4 pointname1">Community</h6>
                        <p class="text-muted mb-4 pointshorttext1">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content. Moltin gives you the platform.
                        </p>
                        <div class="ser-link"><a href="#" class="fs-15 text-dark fw-medium pointlink1">Leer más <i
                                    data-feather="arrow-right" class="icon-xs"></i></a></div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 pt-2">
                    <div class="service rounded px-4 py-md-5 py-3 active">
                        <img src="../../cuidar/images/CuevaInmaculada.jpg" style="max-width: 100%; position: relative;"
                            class="rounded point2image">
                        <h6 class="my-4 pointname2">Pre-approval</h6>
                        <p class="text-muted mb-4 pointshorttext2">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content. Moltin gives you the platform.
                        </p>
                        <div class="ser-link"><a href="#" class="fs-15 text-dark fw-medium pointlink2">Leer más <i
                                    data-feather="arrow-right" class="icon-xs"></i></a></div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 pt-2">
                    <div class="service rounded px-4 py-md-5 py-3">
                        <img src="../../cuidar/images/estatua.png" style="max-width: 100%; position: relative;"
                            class="rounded point3image">
                        <h6 class="my-4 pointname3">Dashboard</h6>
                        <p class="text-muted mb-4 pointshorttext3">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content. Moltin gives you the platform.
                        </p>
                        <div class="ser-link"><a href="#" class="fs-15 text-dark fw-medium pointlink3">Leer más <i
                                    data-feather="arrow-right" class="icon-xs"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end servies -->
@endsection
