@extends('layouts.frontpage')
@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/categorie.css">
<h1 class="pb-20" align="center" style="color: #eec41e;">{{$categorie->name}}</h1>
<div class="d-md-flex flex-md-row justify-content-md-around flex-wrap flex-lg-wrap flex-xl-
wrap tarjeta">
@foreach($categorie->pointofinterests as $point)
<div class="card m-2 postion-relative" style="width:30%;">
    <div id="carouselExampleIndicators{{$point->id}}" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/img/Carreretapurullena.jpeg" alt="Second slide">
              </div>
        @foreach ($recursospoints as $recurso)
            @if ($recurso->id == $point->id && isset($recurso->route))
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ $recurso->route }}" alt="Second slide">
              </div>
            @endif
        @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators{{$point->id}}" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators{{$point->id}}" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <h5 class="card-title position-absolute text-light"><a>{{$point->name}}</a></h5>
  </div>
@endforeach
</div>
@endsection
