<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head></head>


@yield('scripts')
@include('includes.headfront')
@include('includes.headerfront')

<body>
@yield('content')
@include('includes.auth')

</body>
</html>
