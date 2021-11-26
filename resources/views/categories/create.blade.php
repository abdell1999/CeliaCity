@extends("layouts.app")

@section("content")

<form action = "{{ route('categorie.store') }}" enctype="multipart/form-data" method = "post">
    @csrf
                    Nombre:<input type="text" name="name"required><br>

<input type="submit" value="enviar">

@endsection
