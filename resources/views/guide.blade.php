@extends('layouts.frontlayout')

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/guide.js"></script>
    <script src="/assets/js/options.js"></script>
@endsection



@section('content')


@if ($dataoptions['template'] == 1)

    @include("includes.guidetemplate1")

@endif
@if ($dataoptions['template'] == 2)


    @include("includes.guidetemplate2")

@endif

@if ($dataoptions['template'] == 3)


    @include("includes.guidetemplate1")

@endif
@if ($dataoptions['template'] == 4)


    @include("includes.guidetemplate4")

@endif



@endsection
