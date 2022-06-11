<div class="container mt-100 pt-20">
    <h2 class="text-5xl font-bold leading-tight mt-0 mb-2 text-center" style="color: black; padding-top: 60px;">Historia de {{$dataoptions['townname']}}</h2>
    <br>
    @if($resources->isNotEmpty())
            <div class="slider">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper4 ">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            @if (substr($resource->route, strpos($resource->route, ".") + 1) === 'png' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpg' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpeg')

                                    <div class="swiper-slide shadow-lg rounded">

                                        <img src="{{ url($resource->route) }}" style="width: 100%; height: 100%;">

                                    </div>
                                @else
                                    <div class="swiper-slide shadow-lg rounded">

                                        <video muted controls preload disablepictureinpicture style="width: 100%; height: 100%;">
                                            <source src="{{ url($resource->route) }}" type="video/{{substr($resource->route, strpos($resource->route, ".") + 1)}}">
                                        </video>
                                    </div>

                                @endif
                            @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        @foreach ($resources as $resource)
                            @if (substr($resource->route, strpos($resource->route, ".") + 1) === 'png' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpg' || substr($resource->route, strpos($resource->route, ".") + 1) === 'jpeg')

                                    <div class="swiper-slide">

                                        <img src="{{ url($resource->route) }}" style="width: 100%; height: 100%;">

                                    </div>
                                @else
                                    <div class="swiper-slide">

                                        <video muted disablepictureinpicture style="width: 100%; height: 100%;">
                                            <source src="{{ url($resource->route) }}" type="video/{{substr($resource->route, strpos($resource->route, ".") + 1)}}">
                                        </video>
                                    </div>

                                @endif
                            @endforeach
                    </div>
                </div>
                <!-- Imagen grande-->
            </div>
            @endif
        <div class="mt-10">
        <p class="mt-5" style="color: black;">
        {!! $dataoptions['history'] !!}
        </p>
        </div>
</div>
<br>
<br>
<div class="container">
<div id="map" style="height: 40em; z-index: 1;">
</div>
</div>







<script type="text/javascript">
    //Cargando nuestro mapa
    var mapsipe = L.map('map').
    setView([37.330355, -2.302759],
        12); //[] es la latitud y longitud de la zona que queremos mostrar
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',

    }).addTo(mapsipe);
</script>
@foreach ($pointofinterests as $point)
    <ul class="pt-10">
        <script>
            var marker = L.marker([{{ $point->latitude }}, {{ $point->longitude }}]).addTo(mapsipe);
            marker.bindPopup('<a target="_blank" href="/pointofinterests/{{ $point->id }}">{{ $point->name }}</a>')
                .openPopup();
        </script>

    </ul>
@endforeach
<br>
<br>
<script>
    var popup = L.popup();
</script>

<script type="text/javascript">
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
    var swiper3 = new Swiper(".mySwiper3", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper4 = new Swiper(".mySwiper4", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
