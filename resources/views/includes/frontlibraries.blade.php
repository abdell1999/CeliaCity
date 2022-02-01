<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>


<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">


<!--====== Animate CSS ======-->
<link rel="stylesheet" href="assets/css/animate.css">

<!--====== Nice Select CSS ======-->
<link rel="stylesheet" href="assets/css/nice-select.css">


<!--====== Line Icons CSS ======-->
<link rel="stylesheet" href="assets/css/LineIcons.2.0.css">

<!--====== Bootstrap CSS ======-->
<link rel="stylesheet" href="assets/css/bootstrap.4.5.2.min.css">

<!--====== Default CSS ======-->
<link rel="stylesheet" href="assets/css/default.css">

<!--====== Style CSS ======-->
<link rel="stylesheet" href="assets/css/style.css">

<!-- AJAX TOKEN -->
<script>

    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });


    </script>

 <!--====== Jquery js ======-->
 <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
 <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

 <!--====== Bootstrap js ======-->
 <script src="assets/js/popper.min.js"></script>
 <script src="assets/js/bootstrap.4.5.2.min.js"></script>


 <!--====== Scrolling Nav js ======-->
 <script src="assets/js/jquery.easing.min.js"></script>
 <script src="assets/js/scrolling-nav.js"></script>

   <!--====== Main js ======-->
   <script src="assets/js/main.js"></script>
