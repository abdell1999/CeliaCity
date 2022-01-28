@extends("layouts.app")

@section("content")

<form action = "{{ route('resources.store') }}" enctype="multipart/form-data" method = "post">
    @csrf
    <div class="w-full max-w-sm">
        <label class="block text-gray-500 font-bold md:text-center mb-1 md:mb-0 pr-4" for="name">Selecciona el punto de interés:</label>

        <div class="md:w-2/3 ml-16">
            <div class="flex justify-center">
                <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-200 bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:outline-none focus:bg-white focus:border-purple-500" aria-label="Default select example" name="pointofinterests[]">
                    <option selected>Elige el punto de interes</option>
                    @foreach($pointofinterests as $pointofinterest)
                        <option value="{{$pointofinterest['id']}}">{{$pointofinterest['name']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="w-full max-w-sm">
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="type">
                    Añade imágenes
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                type="file"name="images[]" accept="image/*" multiple>
            </div>
        </div>
    </div>

<div class="md:w-1/3">
    <button
        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Enviar
    </button>
</div>
@endsection
