@extends('layouts.app')

@section('content')
    <section class="bg-blueGray-50">
        <div class="w-full mb-12 xl:mb-0 px-10 mx-auto mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h1 class="font-semibold text-base text-xl">Puntos de Interes</h1>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('pointofinterests.create') }}"
                                class="bg-indigo-500 text-white text-sm active:bg-indigo-600 font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Añadir Punto de Interes</a>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Nombre
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Ubicación
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Número movil
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Texto
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Editar
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Borrar
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pointofinterests as $pointofinterest)
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$pointofinterest->name}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$pointofinterest->ubication}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$pointofinterest->movilephone}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-wrap p-4">
                                    {{$pointofinterest->text}}
                                </th>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    <a href="{{ route('pointofinterests.edit', $pointofinterest->id) }}"
                                        ><i class="far fa-edit" style="color: blue;"></i></a>
                                    </th>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 ">
                                        <form method="POST" action="{{ route('pointofinterests.destroy', $pointofinterest->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="" value="Eliminar">
                                        </form>
                                    </th>
                            </tr>
                                @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    @endsection
