@extends('layouts.app')

@section('content')
<div class="flex flex-wrap -mx-2 overflow-hidden ml-2">
            @foreach ($resources as $resource)
            <div class="w-full overflow-hidden xl:my-2 xl:px-2 xl:w-1/4">
                <div class="w-full">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                        src="{{ url($resource->route) }}">
                </div>
                <h1>{{ $resource->title}}</h1>
            </div>
            @endforeach
        </div>
@endsection