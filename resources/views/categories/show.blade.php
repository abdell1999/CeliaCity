@extends('layouts.frontpage')
@section('content')
<link rel="stylesheet" type="text/css" href="/assets/css/categorie.css">
<h1 class="pt-50">{{$categorie->name}}</h1>
<div class="d-flex flex-wrap flex-md-wrap flex-sm-wrap flex-xl-wrap">
@foreach($categorie->pointofinterests as $point)
<div class="card m-2 ">
    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
    <div class="card-body">
      <h5 class="card-title">{{$point->name}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#!" class="btn btn-primary">{{$point->text}}</a>
    </div>
  </div>
@endforeach
</div>
@endsection
