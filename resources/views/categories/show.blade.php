@extends('layouts.frontpage')
@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/categorie.css">
<h1 class="pt-50">{{$categorie->name}}</h1>
<div class="d-md-flex flex-md-row justify-content-md-around flex-wrap flex-lg-wrap flex-xl-
wrap tarjeta">
@foreach($categorie->pointofinterests as $point)
<div class="card m-2" style="width:30%;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/assets/img/Estatuapurullena.jpeg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/img/Hosteleria.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/assets/img/Monumento.jpeg" alt="Third slide">
          </div>
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

    <div class="card-body">
      <h5 class="card-title">{{$point->name}}</h5>
      <a href="#!" class="btn btn-primary">Ruta</a>
    </div>
  </div>
@endforeach
</div>
@endsection
