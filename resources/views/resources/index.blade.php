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
<div class="w-full mb-12 xl:mb-0 px-10 mx-auto mt-10">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h1 class="font-semibold text-base text-xl">Resource</h1>
                </div>
                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button type="button"
                        class="inline-block px-6 py-2.5 bg-indigo-500 text-white font-bold text-sm leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-600 active:shadow-lg transition-all duration-150 ease-linear"
                        data-bs-toggle="modal" data-bs-target="#addResource">Añadir Recurso</button>
                </div>
            </div>
        </div>
        <div id="success_message"></div>
        <div class="block w-full overflow-x-auto">
        </div>
    </div>
</div>
</div>
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="addResource" tabindex="-1" aria-labelledby="addResource" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="addResource">
                    Añadir Recurso
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
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="name">
                                    Nombre
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 name"
                                    type="text" id="name" placeholder="Nombre del punto de interes" name="name" required>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                    for="latitude">
                                    Punto de Interes
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
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="type">
                                    Añade imágenes
                                </label>
                            </div>
                            <div class="md:w-2/3">
                            <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file"name="images[]" accept="image/*" multiple>
                            </div>
                            </div>
                            <div class="md:w-1/3">
                                <button
                                    class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded add_resource"
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
</div>
<div class="flex flex-wrap overflow-hidden justify-between dividir">

</div>
@endsection
