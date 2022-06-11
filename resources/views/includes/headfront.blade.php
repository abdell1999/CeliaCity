<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!--Añadido fontawesome al front para hacer el icono de editar y borra-->
<!-- Fonts -->
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"
    integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!--====== Favicon Icon ======-->

<link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">





<!--====== Line Icons CSS ======-->

<link rel="stylesheet" href="/assets/plantilla1/css/LineIcons.2.0.css">

<!--====== Bootstrap CSS ======-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css' integrity='sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==' crossorigin='anonymous'/>
<link rel="stylesheet" href="/assets/plantilla1/css/bootstrap.4.5.2.min.css">



 <!-- CSS Swiper-->
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
 <!-- Swiper JS -->
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Mirar para quitar start -->


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


@if ($dataoptions['template'] == 1)
<!--====== Animate CSS ======-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css' integrity='sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ==' crossorigin='anonymous'/>
<link rel="stylesheet" href="/assets/plantilla1/css/animate.css">

<!--====== Nice Select CSS ======-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css' integrity='sha512-uHuCigcmv3ByTqBQQEwngXWk7E/NaPYP+CFglpkXPnRQbSubJmEENgh+itRDYbWV0fUZmUz7fD/+JDdeQFD5+A==' crossorigin='anonymous'/>
<link rel="stylesheet" href="/assets/plantilla1/css/nice-select.css">
<!--====== Default CSS ======-->
<link rel="stylesheet" href="/assets/plantilla1/css/default.css">

<!--====== Style CSS ======-->
<link rel="stylesheet" href="/assets/plantilla1/css/style.css">
<script src="/assets/plantilla1/js/vendor/modernizr-3.7.1.min.js"></script>

<script src="/assets/plantilla1/js/bootstrap.4.5.2.min.js"></script>
<script src="/assets/plantilla1/js/popper.min.js"></script>

<script src="/assets/plantilla1/js/jquery.easing.min.js"></script>
<script src="/assets/plantilla1/js/scrolling-nav.js"></script>

<script src="/assets/plantilla1/js/main.js"></script>
@endif





@if ($dataoptions['template'] == 2)
<script src="/assets/plantilla1/js/bootstrap.4.5.2.min.js"></script>
        <link rel="stylesheet" href="/assets/plantilla2/css/main.css" />
		<noscript><link rel="stylesheet" href="/assets/plantilla2/css/noscript.css" /></noscript>
        <script src="/assets/plantilla2/js/jquery.min.js"></script>
        <script src="/assets/plantilla2/js/jquery.scrollex.min.js"></script>
        <script src="/assets/plantilla2/js/jquery.scrolly.min.js"></script>
        <script src="/assets/plantilla2/js/browser.min.js"></script>
        <script src="/assets/plantilla2/js/breakpoints.min.js"></script>
        <script src="/assets/plantilla2/js/util.js"></script>
        <script src="/assets/plantilla2/js/main.js"></script>






@endif
