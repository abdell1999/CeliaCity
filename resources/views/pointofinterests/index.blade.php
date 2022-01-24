@extends('layouts.app')

@section('content')
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                    Añadir Punto de Interes
                </h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <form action="" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="w-full max-w-sm">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="name">
                                    Nombre
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 name"
                                    type="text" id="name" placeholder="Nombre del punto de interes" name="name">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="latitude">
                                    Latitud
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 latitude"
                                    type="text" id="latitude" placeholder="Latitud" name="latitude">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="longitude">
                                    Longitud
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 longitude"
                                    type="text" id="longitude" placeholder="longitud" name="longitude">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="movilephone">
                                    Número móvil
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 movilephone"
                                    type="text" id="movilephone" placeholder="Nombre del nuevo teléfono"
                                    name="movilephone">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="latitude">
                                    Contenido
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 content"
                                    type="text" id="text" cols="65" rows="10"
                                    placeholder="Nombre del nuevo contenido" name="text"></textarea>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="categorie">
                                    Categorias a la que pertenece
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <span class="text-gray-700">Selección multiple</span>
                                <select
                                    class="form-multiselect block w-full mt-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 categoriespoint"
                                    name="categoriespoint[]" multiple="multiple">
                                    @foreach($categoriesS as $categorieS)
                                    <option value="{{$categorieS['id']}}">{{$categorieS['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/3">
                        <button
                            class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded add_pointofinterest"
                            type="submit">
                            Guardar
                        </button>
                    </div>



            </div>
        </div>
    </div>
</div>
    <section class="bg-blueGray-50">
        <div class="w-full mb-12 xl:mb-0 px-10 mx-auto mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h1 class="font-semibold text-base text-xl">Puntos de Interes</h1>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-indigo-500 text-white font-bold text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-600 active:shadow-lg transition-all duration-150 ease-linear"
                                data-bs-toggle="modal" data-bs-target="#exampleModalLg">Añadir Punto de Interes</button>
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
                                    Latitud
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Longitud
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
                                    {{$pointofinterest->latitude}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$pointofinterest->longitude}}
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
