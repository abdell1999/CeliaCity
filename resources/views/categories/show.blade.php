@extends('layouts.frontpage')
@section('content')
    <script src="/assets/js/options.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/categorie.css">
    <h1 class="pb-10" align="center" style="padding-top: 5%;">{{ $categorie->name }}</h1>
    <div align="center"
        class="d-md-flex flex-md-row justify-content-md-around align-center flex-wrap flex-lg-wrap flex-xl-wrap tarjeta"
        style="padding-bottom: 10%; ">
        @foreach ($categorie->pointofinterests as $point)
            <div class="card m-2 postion-relative" style="width:30%;">
                <div id="carouselExampleIndicators{{ $point->id }}" class="carousel slide" data-ride="carousel">
                    <a href="/pointofinterest/{{ $point->slug }}">
                        <div class="carousel-inner">
                            @foreach ($recursospoints as $recurso)
                                @if ($recurso->id == $point->id && isset($recurso->route))
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ url($recurso->route) }}" alt="Second slide">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </a>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $point->id }}" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators{{ $point->id }}" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <h5 class="card-title position-absolute text-light"><a href="/pointofinterest/{{ $point->slug }}"
                        style="color:white !important;">{{ $point->name }}</a></h5>
            </div>
        @endforeach
    </div>
    <script type="text/javascript">
        const carouseles = document.querySelectorAll(".carousel-inner");

        for (let i = 0; i < carouseles.length; i++) {
            carouseles[i].firstElementChild.classList.add('active');
        }
    </script>
@endsection
