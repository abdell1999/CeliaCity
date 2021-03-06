@extends('layouts.app')

@section('content')
<form action="{{ route('categories.update',['category' => $categories->id]) }}" enctype="multipart/form-data" method = "post">
    @csrf
    @method('put')
    <div class="w-full max-w-sm">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">

                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                    Nombre
                </label>
            </div>
            <div class="md:w-2/3">
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                    id="inline-full-name" type="text" id="name" value="{{ $categories->name }}" name="name">

            </div>
        </div>
    </div>



        <div class="md:w-1/3">

            <button
                class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit">
                Editar categoría
            </button>
        </div>

</form>
</div>

@endsection
