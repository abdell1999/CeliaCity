<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="shortcut icon" href="{{$dataoptions['favicon']}}" type="image/x-icon">
</head>


@yield('scripts')
@include('includes.headfront')

@if ($dataoptions['template'] == 1)
    @include('includes.headerfront')
@endif
@if ($dataoptions['template'] == 2)
    @include('includes.plantilla2.headerfronttemplate2')
@endif
@if ($dataoptions['template'] == 3)
    @include('includes.plantilla3.headerfronttemplate3')
@endif
@if ($dataoptions['template'] == 4)
    @include('includes.plantilla4.headerfronttemplate4')
@endif
@if ($dataoptions['template'] == 5)
    @include('includes.plantilla5.headerfronttemplate5')
@endif

<body>
    @yield('content')
    @include('includes.auth')
    @if ($dataoptions['template'] == 1)
        @include('includes.footer')
    @endif

    @if ($dataoptions['template'] == 2)
        @include('includes.plantilla2.footertemplate2')
    @endif

    @if ($dataoptions['template'] == 3)
        @include('includes.plantilla3.footertemplate3')
    @endif

    @if ($dataoptions['template'] == 4)
        @include('includes.plantilla4.footertemplate4')
    @endif
    @if ($dataoptions['template'] == 5)
        @include('includes.plantilla5.footertemplate5')
    @endif

</body>

</html>
