@extends('layouts.app')

@section('content')
<div>
    <div>
        <h1>Categorais</h1>
        <a href=" {{ route('categories.create') }} ">Nueva Categoria</a>
        <div>

            <div class="p-5">
                <table class="w-full p-5 text-gray-700">
                    <thead>
                        <tr>
                            <th class="text-left text-gray-600">Nombre</th>
                            <th class="text-left text-gray-600">Acciones</th>
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
                                <a href="{{ route('categories.edit', $categorie->id) }}"
                                    class="btn btn-dark mr-1">Editar</a>
                                <br>
                                <a href="{{ route('categories.show', $categorie->id) }}"
                                    class="btn btn-success mr-1">Ver</a>
                            </td>




                            </td>
                        </tr>
                        @endforeach
                    </tbody>


                </table>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
