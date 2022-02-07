@extends('layouts.frontpage')
@section('content')
<!--
    <header>
        <div class="flex justify-center ">
            <h1 class="italic text-3xl">{{ $categorie->name }}</h1>
        </div>

        <div class="ml-10 mt-10 md:flex md:flex-row md:justify-evenly flex-wrap">s



    <div class="mt-10 rounded-lg shadow-lg bg-white max-w-sm">
      <a href="#!">
        <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
          <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
              <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full" alt="Wild Landscape" />
            </div>
    g        <div class="carousel-item relative float-left w-full">
              <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full" alt="Camera" />
            </div>
            <div class="carousel-item relative float-left w-full">
              <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full" alt="Exotic Fruits" />
            </div>
          </div>
          <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </a>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">/h5>
        <p class="text-gray-700 text-base mb-4">
          Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>

      </div>
    </div>

</div>
-->
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
