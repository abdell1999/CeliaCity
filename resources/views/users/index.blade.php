@extends('layouts.app')

@section('content')
    <h1>Usuarios</h1>

    <a href=" {{ route('users.create') }} ">Nuevo usuario</a>






    <div class="flex flex-col text-left">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div
                    class="
            shadow
            overflow-hidden
            border-b border-gray-200
            sm:rounded-lg
          ">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  ">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  ">
                                    Contacto
                                </th>
                                <th scope="col"
                                    class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  ">
                                    Fecha de nacimiento
                                </th>
                                <th scope="col"
                                    class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  ">
                                    Role
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ url($user->photo) }}" alt="" />
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $user->name . ' ' . $user->surname1 . ' ' . $user->surname2 }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->address }}</div>
                                    <div class="text-sm text-gray-700">{{ $user->movilphone . '/' . $user->phone }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{$user->borndate}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                    @if ($user->rol == 0)
                                        Administrador
                                    @endif
                                    @if ($user->rol == 1)
                                        Editor
                                    @endif
                                    @if ($user->rol == 2)
                                        Usuario
                                    @endif
                                </td>
                                <td
                                    class="
                    px-6
                    py-4
                    whitespace-nowrap
                    text-right text-sm
                    font-medium
                  ">
                                    <a href="{{ route('users.show', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="text-indigo-600 hover:text-indigo-900" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






@endsection
