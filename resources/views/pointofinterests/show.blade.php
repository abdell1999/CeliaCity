@extends('layouts.front')
@section('content')
<!--pepe-->
<link rel="stylesheet" type="text/css" href="/assets/css/pointofinterest.css">
<body>
  <h1 class="text-5xl font-bold leading-tight mt-0 mb-2 text-black-800">Nombre del restaurante</h1>
  <section class="contenido">
    <div class="datos">
      <div id="tarjeta" class=" block p-6 rounded-lg shadow-2xl bg-white ">
        <h5 class="text-gray-900 text-xl leading-tight font-bold mb-2">Acerca de...</h5>
        <p class="text-gray-700 text-base mb-4">
          The Marble Interpretation Center is conceived as a cultural space where history, tradition, innovation and
          future harmoniously coexist to offer us a vision of the Macael marble culture. It fulfills a triple function
          as visitor reception center, tourist information point and interpretive space that enables a contextualization
          of the Macael marble culture. Inside there are 22 panels, with information in Spanish and English. Together
          with them, the exhibition of different pieces and elements contributes to making the visit more attractive,
          participative and experiential.
        </p>
      </div>
    </div>
    <div class="slider">
      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div thumbsSlider="" class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          </div>
        </div>
      </div>
      <!-- Imagen grande-->
    </div>
    </div>
  </section>

  <div class="rounded-lg mapita shadow-2xl">
    <h2 class="text-5xl font-bold leading-tight mt-0 mb-2 text-black-600">Localización</h2>
    <div id="map" class="mapa">

      <script type="text/javascript">
        //Cargando nuestro mapa
        var mapsipe = L.map('map').
          setView([37.330822, -2.302065],
            16); //[38.6202, -0.5731] es la latitud y longitud de la zona que queremos mostrar
        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
          maxZoom: 18
        }).addTo(mapsipe);
        var marker = L.marker([37.335513, -2.30154]).addTo(mapsipe);
        marker.bindPopup("<b>Monumento</b><br>Mortero del Arguiñano.<br> <img src='mortero2.jfif'width='200px' height='100px'>"
        ).openPopup();

        var marker2 = L.marker([37.334998, -2.299739]).addTo(mapsipe);
        marker2.bindPopup("<b>Monumento</b><br>CRISTIAN ROSQUILLA.").openPopup();

        var popup = L.popup();
        function onMapClick(e) {
          popup
            .setLatLng(e.latlng)
            .setContent("Has pulsado en el mapa en la coordenada " + e.latlng.toString())
            .openOn(mapsipe);
        }
        mapsipe.on('click', onMapClick);




      </script>
    </div>
  </div>
  <script>
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
  </script>


  </div>
  <h2 class="text-5xl font-bold leading-tight mt-0 mb-2 text-black-600">Comentarios</h2>

  <div class="flex justify-start items-center mb-2 ml-20 ">

    <div class="w-1/2 bg-white p-2 pt-4 rounded shadow-2xl">
      <div class="flex ml-3">
        <div class="mr-3">
          <img src="http://picsum.photos/50" alt="" class="rounded-full">
        </div>
        <div>
          <h1 class="font-semibold">Itay Buyoy</h1>

        </div>

      </div>

      <div class="mt-3 p-3 w-full">
        <textarea rows="3" class="border p-2 rounded w-full" placeholder="Write something..."></textarea>
      </div>

      <div class="flex justify-between mx-3">
        <div><button class="px-4 py-1 bg-purple-800 text-white rounded font-light hover:bg-green-700">Enviar</button>
        </div>

      </div>

    </div>

  </div>

  <div class="flex justify-start items-center mb-2 ml-20">
    <div class="w-1/2 bg-white p-2 pt-4 rounded shadow-2xl">
      <div class="flex ml-3">
        <div class="mr-3">
          <img src="http://picsum.photos/50" alt="" class="rounded-full">
        </div>
        <div>
          <h1 class="font-semibold">Itay Buyoy</h1>
        </div>
      </div>

      <div class="mt-5 p-3 w-full">
        <p>El texto del comentario ya posteado</p>
      </div>
      <div class="flex justify-end">
        <button class="mr-2">
          <i class="far fa-edit" style="color: black;"></i>
          Editar
        </button>
        <button>
          <i class="far fa-trash-alt" style="color: black;"></i>
          Eliminar
        </button>
      </div>
    </div>
  </div>

  </div>

  </div>
</body>

</html>



@endsection