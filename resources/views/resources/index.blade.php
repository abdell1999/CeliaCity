@extends('layouts.app')

@section('content')

    <section class="bg-blueGray-50">
        <div class="w-full mb-12 xl:mb-0 px-10 mx-auto mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                    
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h1 class="font-semibold text-base text-xl text-blueGray-700">Recursos</h1>
                    </div>

                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Title
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Route
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Type
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Point of Interest
                                </th>
                            </tr>   
                        </thead>
                        <tbody>
                            @foreach ($resources as $resource)
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$resource->title}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$resource->route}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$resource->type}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{$resource->pointofinterest}}
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                    </div>
                </div>

            </div>
        </div>

</div>


@endsection