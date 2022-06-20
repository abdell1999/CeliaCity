<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="shortcut icon" href="{{$dataoptions['favicon']}}" type="image/x-icon">
    <meta name="author" content="{{$dataoptions['pageowner']}}">
    <meta name="description" content="{{$dataoptions['metadescription']}}">
    <title>{{$dataoptions['townname']}}</title>
@include('includes.headback')

@yield('scripts')
@yield('style')
<header>
    @include('includes.headerback')
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
