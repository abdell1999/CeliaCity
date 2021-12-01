<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('includes.head')
</head>
<body>
@include('includes.header')

<div class="container">
    @yield('content')
</div>
</body>
</html>
