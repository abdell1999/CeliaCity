@extends('layouts.app')

<style type="text/css">
    .dividir{
        width: 100%;
        gap: 1em;
        padding: 0.5em;
    }

    .imagetext{
        width: 24%;
    }

    .centrado{
        align: center;
    }

    .final{
        align: justify;
    }

    @media(max-width:1285px){
        .imagetext{
            width:30%;
        }
        .dividir{
            padding:1em;
        }
    }

    @media(max-width:1025px){
        .imagetext{
            width:45%;
        }
    }

    @media(max-width:650px){
        .imagetext{
            width:100%;
        }
    }

</style>

@section('content')
<div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
        <a href="{{ route('resources.create') }}"
            class="bg-indigo-500 text-white text-sm active:bg-indigo-600 font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
            type="button">Añadir Recurso </a>
</div>
<div class="flex flex-wrap overflow-hidden justify-between dividir">
    @foreach ($resources as $resource)
    <div class="imagetext">
        <div class="w-full w-20 h-64 overflow-hidden">
            <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg w-99" src="{{ url($resource->route) }}">

            <div class="flex justify-end">
                <div x-data="{modal{{$resource->id}}: false}" :class="{'overflow-y-hidden': modal{{$resource->id}}}">

                <!--
                <button
                    class=""
                    @click="modal{{$resource->id}} = true">
                    <i class="far fa-trash-alt" style="color: black;"></i>
                </button>
                -->

                    <!-- Modales -->
                    <!--
                    <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
                        x-show="modal{{$resource->id}}"
                        x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
                            <div class="relative bg-white shadow-lg rounded-md text-gray-900 z-20"
                                @click.away="modal{{$resource->id}} = false"
                                x-show="modal{{$resource->id}}"
                                x-transition:enter="transition transform duration-300"
                                x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                                x-transition:leave="transition transform duration-300"
                                x-transition:leave-start="scale-100" x-transition:leave-end="scale-0">
                            <header class="flex items-center justify-between p-2">
                                <h2 class="font-semibold">Confirmar eliminación</h2>
                                    <button class="focus:outline-none p-2" @click="modal{{$resource->id}} = false">
                                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
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
                                    @click="modal{{$resource->id}} = false">
                                    Cancelar
                                </button>
                                <button class="bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 resourceDelete" eliminar="{{$resource->id}}">
                                    Eliminar
                                </button>
                            </footer>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="flex justify-between">
            <!--Image Tittle-->
           <h1 class="flex justify-start">{{ $resource->title}}</h1>
           <!--Edit button-->
           <button
                class="ml-auto">
                <i class="far fa-edit" style="color: black;"></i>
            </button>
            <!--Delete button-->
            <button
                class="ml-2"
                @click="modal{{$resource->id}} = true">
                <i class="far fa-trash-alt" style="color: black;"></i>
            </button>
        </div>
    </div>
@endforeach
</div>
@endsection
