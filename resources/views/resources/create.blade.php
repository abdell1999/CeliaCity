@extends("layouts.app")

@section("content")

<form action = "{{ route('resources.store') }}" enctype="multipart/form-data" method = "post">
    @csrf
        <div class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
                        Title
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        type="text" id="title" placeholder="Nombre del recurso" name="title">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="route">
                        Route
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        type="text" id="route" placeholder="Ruta donde está guardado" name="route">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="type">
                        Type
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        type="text" id="type" placeholder="Tipo de recurso (foto o vídeo)" name="type">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="type">
                        Añade imágenes
                    </label>
                </div>
                <div class="md:w-2/3">
                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFileMultiple" multiple>
  </div>
                </div>

                </div>
            <!--
            <div class="md:flex md:items-center mb-6">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="type">
                    Sube tus archivos
                </label>
                <form action="{{ route('resources.store') }}" method="post" enctype="multipart/form-data" target="_blank">
                <input type="file" name="archivossubidos[]" multiple>
                <input class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" value="Enviar datos">
                </p>
                </form>
                </div>
            </div>
            -->

            <!-- Custom scripts -->
            <script type="text/javascript">
                const checkbox = document.getElementById("flexCheckIndeterminate");
                checkbox.indeterminate = true;
            </script>



<div class="md:w-1/3">
    <button
        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Enviar
    </button>
</div>
@endsection