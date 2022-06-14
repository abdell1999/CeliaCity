@extends('layouts.frontpage')

@section('scripts')
    <script src="/assets/js/comentarios.js"></script>
    <script src="/assets/js/pointofinterests.js"></script>
    <script src="/assets/js/options.js"></script>
@endsection


@section('content')

@if ($dataoptions['template'] == 1)

    @include("includes.showpointstemplate1")

@endif
@if ($dataoptions['template'] == 2)


    @include("includes.showpointstemplate2")

@endif

@if ($dataoptions['template'] == 3)


    @include("includes.showpointstemplate2")

@endif

@if ($dataoptions['template'] == 4)


    @include("includes.showpointstemplate4")

@endif




@endsection
