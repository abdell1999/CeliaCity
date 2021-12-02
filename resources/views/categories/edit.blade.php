@extends('layouts.app')

@section('content')
<form action="{{ route('categories.update',['category' => $categories->id]) }}" enctype="multipart/form-data" method = "post">
    @csrf
    @method('put')
                    Nombre:<input type="text" name="name" required value="{{ $categories->name }}" required><br>

<input type="submit" value="enviar">

@endsection
