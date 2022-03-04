@extends('layouts.frontpage')
@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/categorie.css">
<h1 class="pt-40">{{$categorie->name}}</h1>

<div class="d-md-flex flex-md-row justify-content-md-around flex-wrap flex-lg-wrap flex-xl-
wrap tarjeta">
@foreach($recursospoints as $point)
<div class="card m-2 postion-relative" style="width:30%;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!--<img class="d-block w-100" src="/assets/img/Estatuapurullena.jpeg" alt="First slide">-->
              <img src="{{ url($point->route) }}" style="width: 100%; height: 100%;">
          </div>
          <!--
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/img/Hosteleria.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/img/Monumento.jpeg" alt="Third slide">
          </div>
          -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <h5 class="card-title position-absolute text-light"><a>{{$point->name}}</a></h5>
  </div>
@endforeach
</div>

<!--
@foreach ($recursospoints as $point)
  <div class="swiper-slide shadow-lg rounded">
    <h1>{{$point->name}}</h1>
    <img src="{{ url($point->route) }}" style="width: 100%; height: 100%;">
  </div>
@endforeach
-->
@endsection
