<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>


<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">


<!--====== Animate CSS ======-->
<link rel="stylesheet" href="/assets/css/animate.css">

<!--====== Nice Select CSS ======-->
<link rel="stylesheet" href="/assets/css/nice-select.css">


<!--====== Line Icons CSS ======-->
<link rel="stylesheet" href="/assets/css/LineIcons.2.0.css">

<!--====== Bootstrap CSS ======-->
<link rel="stylesheet" href="/assets/css/bootstrap.4.5.2.min.css">

<!--====== Default CSS ======-->
<link rel="stylesheet" href="/assets/css/default.css">

<!--====== Style CSS ======-->
<link rel="stylesheet" href="/assets/css/style.css">

 <!-- CSS Swiper-->
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
 <!-- Swiper JS -->
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Mirar para quitar start -->

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
    integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>


<!-- Styles -->


<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!--Leaflet-->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />


<!-- Mirar para quitar end -->

<!-- AJAX TOKEN -->
<script>

    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });


    </script>

 <!--====== Jquery js ======-->
 <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
 <script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>

 <!--====== Bootstrap js ======-->
 <script src="/assets/js/bootstrap.4.5.2.min.js"></script>
 <script src="/assets/js/popper.min.js"></script>


 <!--====== Scrolling Nav js ======-->
 <script src="/assets/js/jquery.easing.min.js"></script>
 <script src="/assets/js/scrolling-nav.js"></script>

   <!--====== Main js ======-->
   <script src="/assets/js/main.js"></script>
