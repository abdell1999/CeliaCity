@extends("layouts.app")

@section("content")

<form action = "{{ route('comments.update',['comment' => $comments->id]) }}" enctype="multipart/form-data" method = "post">
    @csrf
    @method('put')
        <div class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="date">
                        Fecha
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id="inline-full-name" type="date" id="date" placeholder="Fecha del nuevo comentario" name="date" value="{{ $comments->date }}" required>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="valoration">
                        Valoración
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id="inline-full-name" type="text" id="valoration" placeholder="Indique la nueva valoración" name="valoration" value="{{ $comments->valoration }}" required>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="text">
                        Comentario
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id="inline-full-name" type="text" id="text" placeholder="Texto del nuevo comentario" name="text" value="{{ $comments->text }}" required>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="idUser">
                        Usuario
                    </label>
                </div>
                <div class="md:w-2/3">
                        <div class="flex justify-center">
                            <div class="mb-3 xl:w-96">
                              <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal
                                text-gray-700 bg-gray-200 bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="user" aria-label="Default select example">
                                  <option value="{{ $comments->id_user }}" selected>{{ $username->name }} {{ $username->surname1 }} {{ $username->surname2 }}</option>
                                  @foreach ($users as $user)
                                      <option value="{{$user->id}}">{{$user->name}} {{$user->surname1}} {{$user->surname2}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                    </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="idPoint">
                        Punto de Interes
                    </label>
                </div>
                <div class="md:w-2/3">
                    <div class="flex justify-center">
                        <div class="mb-3 xl:w-96">
                          <select class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal
                            text-gray-700 bg-gray-200 bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="pointofinterest" aria-label="Default select example">
                              <option value="{{ $comments->id_pointofinterest }}" selected>{{ $pointofinterest->name }}</option>
                              @foreach ($pointofinterests as $pointofinterest)
                                  <option value="{{$pointofinterest->id}}">{{$pointofinterest->name}}</option>
                              @endforeach
                          </select>
                        </div>
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
