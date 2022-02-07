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
                                Valor
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
                    <tr>
                        <th>Nombre del pueblo</th>
                        <th>Purullena</th>
                        <th>
                            <a href="#" class="optionEdit"><i class="far fa-edit"
                                style="color: blue;"></i></a>

                        </th>
                        <th>
                            <a href="#" class="optionReset"><i class="far fa-trash-alt"
                                style="color: red;"></i></a>
                        </th>


                    </tr>

                    <tbody>
                    </tbody>




@endsection
