@extends('layouts.app')

@section('content')
<h1>Usuarios</h1>

<a href=" {{ route('users.create') }} ">Nuevo usuario</a>

<div class="col-md10 mx-auto bg-white p-3">
    <table class="table">
        <thead>
            <tr>
                <th scole="col">Nombre</th>
                <th scole="col">Apellido 1</th>
                <th scole="col">Apellido 2</th>
                <th scole="col">email</th>
                <th scole="col">telefono fijo</th>
                <th scole="col">telefono móvil</th>
                <th scole="col">fecha de nacimiento</th>
                <th scole="col">imagen</th>
                <th scole="col">dirección</th>
                <th scole="col">rol</th>
                
            </tr>
        </thead>


        <tbody>
            @foreach ($users as $user)
            <tr>
                <td> {{$user->name}} </td>
                <td> {{$user->surname1}} </td>
                <td> {{$user->surname2}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->phone}} </td>
                <td> {{$user->movilephone}} </td>
                <td> {{$user->borndate}} </td>
                <td> {{$user->photo}} </td>
                <td> {{$user->address}} </td>
                <td> {{$user->rol}} </td>
                <td>
                   


                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger w-20 d-block" value="Eliminar">
                    </form>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-dark mr-1">Editar</a>
                    <br>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-success mr-1">Ver</a>
                </td>




                </td>
            </tr>
            @endforeach
        </tbody>


    </table>

</div>


@endsection
