@extends('layouts.frontlayout')

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="/assets/js/guide.js"></script>

@endsection

@section('content')

@php
    $i = 2;
@endphp


@if ($i ==2)

@include('includes.guidetemplate1')

@else
<script>
alert("No se carga la primera plantilla");
</script>
@endif


@endsection
