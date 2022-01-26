<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('includes.head')
@yield('styles')
@yield('scripts')
<header>
    @include('includes.headfrontall')
<header>
</head>
<body>
<div class="container w-full mx-auto pt-20">
        @yield('content')
<div>
</body>
</html>
