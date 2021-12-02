@extends('layouts.app')

@section('content')
<h1>Comentarios</h1>

<a href=" {{ route('comments.create') }} ">Nuevo comentario</a>

<div class="col-md10 mx-auto bg-white p-3">
    <table class="table">
        <thead>
            <tr>
                <th scole="col">Fecha</th>
                <th scole="col">Valoración</th>
                <th scole="col">Texto</th>
                <th scole="col">idUser</th>
                <th scole="col">idPoint</th>
                
                
            </tr>
        </thead>


        <tbody>
            @foreach ($comments as $comment)
            <tr>
                <td> {{$comment->date}} </td>
                <td> {{$comment->valoration}} </td>
                <td> {{$comment->text}} </td>
                <td> {{$comment->id_user}} </td>
                <td> {{$comment->id_pointofinterest}} </td>
                <td>
                   


                <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger w-20 d-block" value="Eliminar">
                    </form>
                    <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-dark mr-1">Editar</a>
                    <br>
                    <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-success mr-1">Ver</a>
                </td>




                </td>
            </tr>
            @endforeach
        </tbody>


    </table>

</div>


@endsection
