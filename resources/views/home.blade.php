@if ($dataoptions['template'] == 1)
    @include('includes.hometemplate1')
@endif

@if ($dataoptions['template'] == 2)
    @include('includes.plantilla2.hometemplate2')
@endif
@if ($dataoptions['template'] == 3)
    @include('includes.plantilla3.hometemplate3')
@endif
@if ($dataoptions['template'] == 4)
    @include('includes.plantilla4.hometemplate4')
@endif
@if ($dataoptions['template'] == 5)
    @include('includes.plantilla5.hometemplate5')
@endif
