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

    <!-- searchPopup -->
    <main>
        <!-- bannerSec -->
        <section class="bannerSec d-flex position-relative overflow-hidden">
            <div class="alignCenter w-100 d-flex align-items-center">
                <div class="container pt-22 pb-18 pb-lg-1 pt-sm-22 pt-md-26 pt-xl-32">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="captionWrap position-relative pr-lg-8 pr-lgwd-15 pr-xl-21">
                                <h1 class="text-white fwSemibold mb-3 mb-lg-5">
                                    <span class="d-block">Bienvenido a <span
                                            class="townnamed">{{ $dataoptions['townname'] }}</span></span>
                                </h1>
                                <p style="color: white;">{{ $dataoptions['shortdescription'] }}
                                </p>
                                <div class="btnHolder d-flex mt-lg-1">
                                    <a href="/guide"
                                        class="btn btnPrimary btnMin align-top mt-2 mt-lg-5 mt-md-6 p-0 border-0 position-relative"
                                        data-hover="Guia Turistica">
                                        <span class="d-block btnText">Guia Turistica</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="bgImg bgCover position-absolute"
                style="background-image: url({{ $dataoptions['coverpage'] }})"></span>
        </section>
        <div class="contenido-bro" style="background-color: #abd1c6 !important;">
            <!-- covidCounterAside  -->
            <div class="abtCovidDisease position-relative py-10 py-md-15 py-lg-20">
                <div class="container">
                    <div class="afColumnsWrap">
                        <!-- afColumn -->
                        <article class="afColumn">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 mb-5 mb-md-0">
                                    <!-- imgHolder -->
                                    <div class="imgHolder position-relative mx-auto mb-4 mb-md-0">
                                        <img src="{{ $dataoptions['coverpage2'] }}" class="rounded-lg">
                                        <!-- bgPattern -->
                                        <span class="bgPattern position-absolute"></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="extraWrap pl-md-7 pl-lg-14">
                                        <!-- titleWrap -->
                                        <header class="titleWrap">
                                            <h2 class="mb-5">Más información
                                                sobre <span class="townname">{{ $dataoptions['townname'] }}</span></h2>
                                            <p class="fsSmall longdescription">{{ $dataoptions['longdescription'] }}

                                            </p>
                                        </header>
                                        <div class="acdBtnWrap d-sm-flex align-items-center">
                                            <a href="javascript:void(0);"
                                                class="btn btnPrimary btnMin align-top mr-sm-8 mr-md-2 mr-lg-5 mr-lgwd-8 mt-4 mt-md-6 mt-lg-5 p-0 border-0 position-relative"
                                                data-hover="Guia Turistica">
                                                <span class="d-block btnText">Guia Turistica</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- syOFcvBlock  -->
            <section class="preANDadviceBlock position-relative py-10 pt-sm-14 pt-md-18 pt-lg-22">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                            <header class="mb-7 mb-md-10 mb-lg-15 text-center mx-xl-n8">
                                <h1>Puntos destacados</h1>
                                <h5>Aquí tienes los tres puntos más destacados de <span class="townname">TOWNNAME</span>:
                                </h5>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <!-- preAdvStep  -->
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <article
                                class="preAdvStep text-center w-100 hasShadow rounded-lg py-4 py-md-5 py-lg-7 px-3 px-md-6 px-lg-8 mb-5">
                                <span
                                    class="icnWrap d-flex align-items-center justify-content-center rounded-circle mb-2 mb-md-4">
                                    <span class="w-100 d-block p-1">
                                        <img src="assets/img/CuestaNegro.png" class="img-fluid point1image" alt="icon">
                                    </span>
                                </span>
                                <h4 class="h4 fwSemibold pointname1">
                                    Avoid Close contact
                                </h4>
                                <p class="mb-0 pointshorttext1">Maintain at least 1 metre (6 feet) distance between yourself
                                    & anyone
                                    who is coughing or sneezing. If you are too close, get chance to infected.</p>
                                <a href="#" class="more pointlink1">Leer más</a>
                            </article>
                        </div>
                        <!-- preAdvStep  -->
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <article
                                class="preAdvStep text-center w-100 hasShadow rounded-lg py-4 py-md-5 py-lg-7 px-3 px-md-6 px-lg-8 mb-5">
                                <span
                                    class="icnWrap d-flex align-items-center justify-content-center rounded-circle mb-2 mb-md-4">
                                    <span class="w-100 d-block p-1">
                                        <img src="assets/img/CuestaNegro.png" class="img-fluid point2image" alt="icon">
                                    </span>
                                </span>
                                <h4 class="h4 fwSemibold pointname2">
                                    Clean your hands Often
                                </h4>
                                <p class="mb-0 pointshorttext2">Regularly and thoroughly clean your hands with an
                                    alcohol-based hand rub
                                    or wash them with soap and water for at least 20 seconds</p>
                                <a href="#" class="more pointlink2">Leer más</a>
                            </article>
                        </div>
                        <!-- preAdvStep  -->
                        <div class="col-12 col-md-6 col-lg-4 d-flex">
                            <article
                                class="preAdvStep text-center w-100 hasShadow rounded-lg py-4 py-md-5 py-lg-7 px-3 px-md-6 px-lg-8 mb-5">
                                <span
                                    class="icnWrap d-flex align-items-center justify-content-center rounded-circle mb-2 mb-md-4">
                                    <span class="w-100 d-block p-1">
                                        <img src="assets/img/CuestaNegro.png" class="img-fluid point3image" alt="icon">
                                    </span>
                                </span>
                                <h4 class="h4 fwSemibold pointname3">
                                    Stay at home
                                </h4>
                                <p class="mb-0 pointshorttext3">Avoid close contact with people who are sick and stay home
                                    if you are
                                    sick to avoid spreading illness to others.</p>
                                <a href="#" class="more pointlink3">Leer más</a>
                            </article>
                        </div>
                        <!-- preAdvStep  -->
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
