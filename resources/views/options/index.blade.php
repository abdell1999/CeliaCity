@extends('layouts.app')

@section('scripts')

    <script src="/assets/js/options.js"></script>
@endsection


@section('content')

    <div class="bg-blueGray-50">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h1 class="font-semibold text-base text-xl text-blueGray-700">Opciones</h1>
                        </div>

                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse " id="categorieTable">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Opción
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Tipo
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Editar
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Reset
                                </th>
                            </tr>
                        </thead>
                        @foreach ($options as $option)


                            <tr id="{{ $option['id'] }}" type="{{ $option['type'] }}">
                                <th>{{ $option['name'] }}</th>
                                <th>
                                    @if ($option['type'] == "text")
                                    Texto
                                    @endif

                                    @if ($option['type'] == "image")
                                    Imagen
                                    @endif

                                    @if ($option['type'] == "point")
                                    Punto de interés
                                    @endif

                                    @if ($option['type'] == "template")
                                    Plantilla
                                    @endif

                                    @if ($option['type'] == "comments")
                                    Comentarios
                                    @endif


                                </th>
                                <th>
                                    <a href="#" class="optionEdit" data-bs-toggle="modal" data-bs-target="#optionModalScrollable"><i class="far fa-edit"
                                            style="color: blue;"></i></a>

                                </th>
                                <th>
                                    <a href="#" class="optionReset"><i class="far fa-trash-alt"
                                            style="color: red;"></i></a>
                                </th>


                            </tr>
                        @endforeach
                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="optionModalScrollable" tabindex="-1" aria-labelledby="optionModalScrollable" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="optionModalScrollableLabel">
                        Editar opción
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <div id="originalContent">

                    </div>
                    <br><br>
                    <div id="modifiedContent">

                </div>
                </div>
                <div id="controlesModal"
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">

                </div>
            </div>
        </div>
    </div>

@endsection
