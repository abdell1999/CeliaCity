@extends("layouts.app")

@section("content")

<form action = "{{ route('pointofinterests.update') }}" enctype="multipart/form-data" method = "post">
    @csrf
                    Nombre:<input type="text" name="name"required value="{{ $pointofinterests->name }}" required><br>><br>
                    Ubicación:<input type="text" name="ubication" value="{{ $pointofinterests->ubication }}" required><br>
                    Número móvil:<input type="text" name="movilephone" value="{{ $pointofinterests->movilephone }}" required><br>
                   Contenido:<input type="text" name="text" value="{{ $pointofinterests->text }}" required><br>

<input type="submit" value="enviar">

@endsection