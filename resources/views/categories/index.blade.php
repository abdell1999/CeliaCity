@extends('layouts.app')

@section('content')
<h1>Categorias</h1>

<a href=" {{ route('categories.create') }} ">Nueva Categoria</a>

<div class="col-md10 mx-auto bg-white p-3">
    <table class="table">
        <thead>
            <tr>
                <th scole="col">Nombre</th>
            </tr>
        </thead>


        <tbody>
            @foreach ($categories as $categorie)
            <tr>
                <td> {{$categorie->name}} </td>
                <td>



                <form method="POST" action="{{ route('categories.destroy', $categorie->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger w-20 d-block" value="Eliminar">
                    </form>
                    <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-dark mr-1">Editar</a>
                    <br>
                    <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-success mr-1">Ver</a>
                </td>




                </td>
            </tr>
            @endforeach
        </tbody>


    </table>

</div>


@endsection
