@extends('layouts.front')
@section('content')

<h1 style='color: red;'>{{ $categories->name }}</h1>


<script>alert("{{$categories->name}}")</script>

@endsection
