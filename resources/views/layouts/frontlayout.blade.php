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
@if ($dataoptions['template'] == 3)
@include('includes.headerfronttemplate3')
@endif
@if ($dataoptions['template'] == 4)
@include('includes.headerfronttemplate4')
@endif

<body>
@yield('content')
@include('includes.auth')
@if ($dataoptions['template'] == 1)
@include('includes.footer')
@endif

@if ($dataoptions['template'] == 2)
@include('includes.footertemplate2')
@endif

@if ($dataoptions['template'] == 3)
@include('includes.footertemplate3')
@endif

@if ($dataoptions['template'] == 4)
@include('includes.footertemplate4')
@endif

</body>
</html>
