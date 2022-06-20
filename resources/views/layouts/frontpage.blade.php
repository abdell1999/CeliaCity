<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="shortcut icon" href="{{$dataoptions['favicon']}}" type="image/x-icon">
    <meta name="author" content="{{$dataoptions['pageowner']}}">
    <meta name="description" content="{{$dataoptions['metadescription']}}">
    <title>{{$dataoptions['townname']}}</title>
    @include('includes.headfront')
    @yield('styles')
    @yield('scripts')
    <header>
        @include('includes.auth')
        @if ($dataoptions['template'] == 1)
            @include('includes.headerfront')
            <script>
                $('#barraNav').addClass('sticky2');
            </script>
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


    </header>
</head>

<body>
    <div class="container w-full mx-auto pt-100">
        @yield('content')
    </div>


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
