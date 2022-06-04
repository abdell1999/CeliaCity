@extends('layouts.frontlayout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/options.js"></script>

@section('content')

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
                                <span class="d-block">Bienvenido a <span class="townnamed">{{$dataoptions['townname']}}</span></span>
                            </h1>
                            <p style="color: white;">{{$dataoptions['shortdescription']}}
                            </p>
                            <div class="btnHolder d-flex mt-lg-1">
                                <a href="javascript:void(0);"
                                    class="btn btnPrimary btnMin align-top mt-2 mt-lg-5 mt-md-6 p-0 border-0 position-relative"
                                    data-hover="Guia Turistica">
                                    <span class="d-block btnText">Guia Turistica</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block imageWrap">
                        <!-- imgHolder -->
                        <div class="imgHolder pl-md-5 pl-xl-12 mb-md-n10 mb-lg-0 position-relative">
                            <img src="http://placehold.it/650x740" class="img-fluid" alt="image description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="bgImg bgCover position-absolute"
            style="background-image: url({{$dataoptions['coverpage']}})"></span>
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
                                <img src="{{$dataoptions['coverpage2']}}" class="rounded-lg"
                                    >
                                <!-- bgPattern -->
                                <span class="bgPattern position-absolute"></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="extraWrap pl-md-7 pl-lg-14">
                                <!-- titleWrap -->
                                <header class="titleWrap">
                                    <h2 class="mb-5">Más información
                                        sobre <span class="townname">{{$dataoptions['townname']}}</span></h2>
                                    <p class="fsSmall longdescription">{{$dataoptions['longdescription']}}

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
                        <h5>Aquí tienes los tres puntos más destacados de <span class="townname">TOWNNAME</span>:</h5>
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
                        <p class="mb-0 pointshorttext1">Maintain at least 1 metre (6 feet) distance between yourself & anyone
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
                        <p class="mb-0 pointshorttext2">Regularly and thoroughly clean your hands with an alcohol-based hand rub
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
                        <p class="mb-0 pointshorttext3">Avoid close contact with people who are sick and stay home if you are
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
