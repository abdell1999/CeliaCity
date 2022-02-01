@extends('layouts.frontlayout')

@section('content')
<div id="home" class="header_slider">
    <div class="single_slider bg_cover d-flex align-items-center"
        style="background-image: url(assets/img/purullena.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="slider_content">
                        <h2 class="slider_title wow fadeInLeftBig" data-wow-duration="1.3s"
                            data-wow-delay="0.2s">Bienvenido a<span> Purullena</span></h2>
                        <p class="wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">Lorem ipsum
                            dolor amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidun
                            dolore.</p>
                        <a href="javascript:void(0)" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s"
                            data-wow-delay="0.8s">Book Now</a>
                    </div> <!-- slider content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->
</div> <!-- header slider -->
@endsection
