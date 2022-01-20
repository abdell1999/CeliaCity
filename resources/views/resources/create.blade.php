@extends("layouts.app")

@section("content")

<form action = "{{ route('resources.store') }}" enctype="multipart/form-data" method = "post">
    @csrf
        <div class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="type">
                        Añade imagenes
                    </label>
                </div>
                <div class="md:w-2/3">
                <input class="form-control
    block
    w-full
    px-3
    py-1.5
    text-base
    font-normal
    text-gray-700
    bg-white bg-clip-padding
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file"name="images[]" accept="image/*" multiple>
  </div>
                </div>

                </div>
            <!--
            <div class="md:flex md:items-center mb-6">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="type">
                    Sube tus archivos
                </label>
                <form action="" method="post" enctype="multipart/form-data" target="_blank">
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
