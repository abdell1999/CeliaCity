@extends('layouts.app')

@section('content')
<h1>Punto de interes</h1>

<a href=" {{ route('pointofinterests.create') }} ">Nuevo punto de interes</a>

<div class="col-md10 mx-auto bg-white p-3">
    <table class="table">
        <thead>
            <tr>
                <th scole="col">Nombre</th>
                <th scole="col">Ubicación</th>
                <th scole="col">movilephone</th>
                <th scole="col">text</th>
            </tr>
        </thead>


        <tbody>
            @foreach ($pointofinterests as $pointofinterest)
            <tr>
                <td> {{$pointofinterest->name}} </td>
                <td> {{$pointofinterest->ubication}} </td>
                <td> {{$pointofinterest->movilephone}} </td>
                <td> {{$pointofinterest->text}} </td>
                <td>
                   


                <form method="POST" action="{{ route('pointofinterests.destroy', $pointofinterest->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger w-20 d-block" value="Eliminar">
                    </form>
                    <a href="{{ route('pointofinterests.edit', $pointofinterest->id) }}" class="btn btn-dark mr-1">Editar</a>
                    <br>
                    <a href="{{ route('pointofinterests.show', $pointofinterest->id) }}" class="btn btn-success mr-1">Ver</a>
                </td>




                </td>
            </tr>
            @endforeach
        </tbody>


    </table>

</div>


@endsection
