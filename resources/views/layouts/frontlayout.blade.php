<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head></head>


@yield('scripts')
@include('includes.headfront')

@if ($dataoptions['template'] == 1)
@include('includes.headerfront')
@endif
@if ($dataoptions['template'] == 2)
@include('includes.headerfronttemplate2')
@endif


<body>
@yield('content')
@include('includes.auth')

</body>
</html>
