@extends('layouts.app')

@section('content')
    <div class="bg-blueGray-50">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h1 class="font-semibold text-base text-xl text-blueGray-700">Categorias</h1>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('categories.create') }}"
                                class="bg-indigo-500 text-white text-sm active:bg-indigo-600 font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Añadir Categoria</a>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Nombre
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Editar
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Borrar
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $categorie)
                                    <tr>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4  text-blueGray-700">
                                            {{ $categorie->name }}
                                        </th>
                                        <th
                                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 ">
                                            <a href="{{ route('categories.edit', $categorie->id) }}"><i
                                                    class="far fa-edit" style="color: blue;"></i></a>
                                        </th>
                                        <th>



<!-- AQUI EMPIEZAN LOS MODALES -->

<div x-data="{modal{{$categorie->id}}: false}" :class="{
    'overflow-y-hidden': modal{{$categorie->id}}}">


    <button
        class="bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
        @click="modal{{$categorie->id}} = true">
        Eliminar
    </button>




    <!-- Modales -->
    <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
    x-show="modal{{$categorie->id}}"
    x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div class="relative bg-white shadow-lg rounded-md text-gray-900 z-20"
            @click.away="modal{{$categorie->id}} = false"
            x-show="modal{{$categorie->id}}"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="scale-100" x-transition:leave-end="scale-0">
            <header class="flex items-center justify-between p-2">
                <h2 class="font-semibold">Confirmar eliminación</h2>
                <button class="focus:outline-none p-2"
                    @click="modal{{$categorie->id}} = false">
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg"
                        width="18" height="18" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </button>
            </header>
            <main class="p-2 text-center">
                <p>
                    ¿Esta seguro de que desea eliminar este registro (Este proceso es
                    irreversible)?
                </p>
            </main>
            <footer class="flex justify-center p-2">
                <button
                    class="bg-green-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
                    @click="modal{{$categorie->id}} = false">
                    Cancelar
                </button>

                <form method="POST"
                    action="{{ route('categories.destroy', $categorie->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit"
                        class="bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
                        value="Eliminar">
                </form>


            </footer>
        </div>
    </div>
</div>




</div>


</th>
</tr>
</div>





<!-- AQUI TERMINAN LOS MODALES -->






                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>









    </div>



<!-- PRUEBAS -->








@endsection
