<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('includes.headfront')
@yield('styles')
@yield('scripts')
<header>
    @if ($dataoptions['template'] == 1)
    @include('includes.headerfront')
    <script>
        $('#barraNav').addClass('sticky2');


    </script>
    @endif
    @if ($dataoptions['template'] == 2)
@include('includes.headerfronttemplate2')
@endif
@include('includes.auth')


</header>
</head>
<body>
<div class="container w-full mx-auto pt-100">
        @yield('content')
</div>
@include('includes.footer')
</body>
</html>
