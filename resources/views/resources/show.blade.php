@extends('layouts.app')

@section('content')

    <section class="bg-blueGray-50">
        <div class="w-full mb-12 xl:mb-0 px-10 mx-auto mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h1 class="font-semibold text-base text-xl text-blueGray-700">{{$resources->title}}</h1>
                        </div>
                        <div>
                        @foreach($resources->pointofinterests as $point)
                        <br>   
                        <li>FK</li>             
                        <li>{{$point->name}}</li>
                        @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>

</div>


@endsection