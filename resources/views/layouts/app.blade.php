<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('includes.head')

@yield('scripts')
@yield('style')
<header>
    @include('includes.header')
<header>
</head>
<body>
<div class="container w-full mx-auto pt-20">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        @yield('content')
    </div>
<div>
</body>
</html>
