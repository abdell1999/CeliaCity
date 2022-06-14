@extends('layouts.frontlayout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/options.js"></script>

@section('content')

<!-- start hero -->
<section class="hero-4 position-relative d-flex align-items-center justify-content-center overflow-hidden" id="home">
    <img class="hero-4-bg" src="{{$dataoptions['coverpage']}}" style="height: 100%; width:100% ;" alt="">
    <div class="hero-4-bg position-relative"></div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h4 class="text-white fs-24 text-uppercase fw-normal subtitle">Bienvenido a</h4>
                <h1 class="hero-4-title text-uppercase text-white">{{$dataoptions['townname']}}</h1>
                <p class="text-muted mb-4 pb-2" style="color: white !important;">{{$dataoptions['shortdescription']}}
                </p>
                <div>
                    <button class="btn btn-primary d-inline-block me-2" onclick="window.location.href='/guide'">Historia</button>
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
                    sobre {{$dataoptions['townname']}}</h3>
                <h6 class="text-muted fw-normal">{{$dataoptions['longdescription']}}
                </h6>

            </div>
            <div class="col-lg-6">
                <img class="rounded" style="max-width: 120%; position: relative;"
                    src="{{$dataoptions['coverpage2']}}" alt="">
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
                <h5 class="text-muted fw-normal">Aquí tienes los tres puntos más destacados de <span class="townname">TOWNNAME</span>:

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