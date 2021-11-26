@extends("layouts.app")

@section("content")

<form action = "{{ route('pointofinterests.store') }}" enctype="multipart/form-data" method = "post">
    @csrf
                    Nombre:<input type="text" name="name"required><br>
                    Ubicación:<input type="text" name="ubication"required><br>
                    Número móvil:<input type="text" name="movilephone"required><br>
                   Contenido:<input type="text" name="text" required><br>

<input type="submit" value="enviar">

@endsection