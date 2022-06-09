@if ($dataoptions['template'] == 1)
    @include("includes.hometemplate1")
@endif

@if ($dataoptions['template'] == 2)
@include("includes.hometemplate2")
@endif
<<<<<<< HEAD
@include('cookie-consent::index')
=======
@if ($dataoptions['template'] == 3)
@include("includes.hometemplate3")
@endif
@if ($dataoptions['template'] == 4)
@include("includes.hometemplate4")
@endif
>>>>>>> 2003374ad1e724435f0a79f6c6c07dbb7612ecd8
