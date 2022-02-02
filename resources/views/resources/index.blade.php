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
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="editModal" tabindex="-1" aria-labelledby="editModal" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Editar Nombre Recurso
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <ul id="saveform_errList"></ul>
                    <form action="" class="editformResource" enctype="multipart/form-data" method="post">
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
                                        type="text" id="edit_name" placeholder="Nombre del recurso"
                                        name="edit_name" required>
                                </div>
                            </div>
                                <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <button
                                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded update_resource"
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
                </div>
            </div>
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
        </div>
        <div class="flex justify-between">
            <!--Image Tittle-->
           <h1 class="flex justify-start">{{ $resource->title}}</h1>
           <!--Edit button-->
           <button
                class="ml-auto editbtn" data-bs-toggle='modal' data-bs-target='#editModal' value="{{$resource->id}}">
                <i class="far fa-edit" style="color: black;"></i>
            </button>
            <!--Delete button-->
            <button
                class="ml-2">
                <i class="far fa-trash-alt" style="color: black;"></i>
            </button>
        </div>
    </div>
@endforeach
</div>
@endsection
