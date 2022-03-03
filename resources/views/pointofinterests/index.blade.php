@extends('layouts.app')


@section('scripts')

    <script src="/assets/js/pointofinterests.js"></script>
    <script src="/assets/js/map.js"></script>
@endsection


@section('content')

<!-- Estilos necesarios para que se muestre el mapa, moverlos de aquí -->
<style>
    #selectPoint {
      width: 100%;
      height: 400px;
      box-shadow: 5px 5px 5px #888;
   }
  </style>



    <!-- Modal Añadir -->
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
                    <ul id="saveform_errList"></ul>
                    <form action="" class="formPoint" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="w-full max-w-sm">
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                                        Nombre
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                    <input
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 name"
                                        type="text" id="name" placeholder="Nombre del punto de interes" name="name"
                                        required>
                                </div>
                            </div>

                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <button data-bs-target="#modalMapa" class="showMapbtn block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Mostrar Mapa</button>

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
                                        type="text" id="latitude" placeholder="Latitud" name="latitude" required>
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
                                        type="text" id="longitude" placeholder="longitud" name="longitude" required>
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
                                        name="movilephone" required>
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
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 contenido"
                                        type="text" id="contenido" name="contenido" cols="65" rows="10"
                                        placeholder="Nombre del nuevo contenido" name="text" required></textarea>
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
                                        name="categoriespoint[]" id="categoriespoint" multiple="multiple">
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie['id'] }}">{{ $categorie['name'] }}</option>
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
                            <button
                                class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                data-bs-dismiss="modal" aria-label="Close">
                                Cerrar
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal Añadir --->

    <!-- Modal Delete --->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Eliminar</h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    ¿Seguro que quieres borrar el punto de interes?
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <input type="hidden" id="point_id" value="" />
                    <button type="button"
                        class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded
          shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">Cancelar</button>
                    <button type="button"
                        class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded
      shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1 delete_point">Borrar</button>
                    <input type="hidden" id="deleteing_id">
                </div>
            </div>
        </div>
    </div>

    <!-- Fin Modal Delete -->

    <!-- Modal Edit -->

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="editModal" tabindex="-1" aria-labelledby="editModal" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Editar y Actualizar Punto de Interes
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <ul id="saveform_errList"></ul>
                    <form action="" class="editformPoint" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="w-full max-w-sm">
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                                        Nombre
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                    <input
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 edit_name"
                                        type="text" id="edit_name" placeholder="Nombre del punto de interes"
                                        name="edit_name" required>
                                </div>
                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <button data-bs-target="#modalMapa" class="showMapbtn block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Mostrar Mapa</button>

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
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 edit_latitude"
                                        type="text" id="edit_latitude" placeholder="Latitud" name="edit_latitude" required>
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
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 edit_longitude"
                                        type="text" id="edit_longitude" placeholder="longitud" name="edit_longitude"
                                        required>
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
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 edit_movilephone"
                                        type="text" id="edit_movilephone" placeholder="Nombre del nuevo teléfono"
                                        name="edit_movilephone" required>
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
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 edit_contenido"
                                        type="text" id="edit_contenido" name="edit_contenido" cols="65" rows="10"
                                        placeholder="Nombre del nuevo contenido" name="text" required></textarea>
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
                                        class="form-multiselect block w-full mt-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 edit_categoriespoint"
                                        name="edit_categoriespoint[]" id="edit_categoriespoint" multiple="multiple">

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/3">
                            <button
                                class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded update_pointofinterest"
                                type="submit">
                                Actualizar
                            </button>
                            <button
                                class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                data-bs-dismiss="modal" aria-label="Close">
                                Cerrar
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fin Modal Edit -->

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
                <div id="success_message"></div>
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

                        </tbody>

                    </table>
                </div>
            </div>
        </div>




        <!-- Modal Mapa --->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="modalMapa" tabindex="-1" aria-labelledby="modalMapalLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="modalMapaLabel">Busca el punto en el mapa</h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                ¡Arrastra el marcador al punto que te interese!
                <div id="selectPoint"></div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">


            </div>
        </div>
    </div>
</div>

<!-- Fin Modal MAPA -->











    @endsection
