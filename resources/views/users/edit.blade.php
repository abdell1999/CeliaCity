@extends('layouts.app')

@section('content')


    <!-- NUEVO FORMULARIO REGISTRO -->

    <form class="w-full max-w-lg" method="POST" action="{{ route('users.update',['user' => $users->id]) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method("PUT")
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Nombre
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name')
                    border-red-500
                    @enderror"
                    id="name" name="name" type="text" value="{{$users->name}}" required>


                    @error('name')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror

            </div>
            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="surname1">
                    Primer apellido
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('surname1')
                    border-red-500
                    @enderror"
                    id="surname1" name="surname1" type="text" value="{{$users->surname1}}" required>
                    @error('surname1')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror
          </div>


          <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="surname2">
                Segundo apellido
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="surname2" name="surname2" type="text" value="{{$users->surname2}}">
      </div>


        <div class="w-full md:w-3/3 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                EMAIL
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email')
              border-red-500
              @enderror" id="email" name="email" type="email" value="{{$users->email}}" required>


              @error('email')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror


        </div>


        <div class="w-full md:w-3/3 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                DIRECCIÓN
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('address')
              border-red-500
              @enderror" id="address" name="address" type="text" value="{{$users->address}}" required>
              @error('address')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror

        </div>



        <div class="w-full md:w-1/2 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="movilphone">
                TELÉFONO MÓVIL
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('movilphone')
              border-red-500
              @enderror" id="movilphone" name="movilphone" type="number" value="{{$users->movilphone}}" required>

              @error('movilphone')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror

        </div>

        <div class="w-full md:w-1/2 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                TELÉFONO FIJO
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('phone')
              border-red-500
              @enderror" id="phone" name="phone" type="number" value="{{$users->phone}}" required>

              @error('phone')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror

        </div>

        <div class="w-full md:w-2/2 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="borndate">
                FECHA DE NACIMIENTO
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('borndate')
              border-red-500
              @enderror" id="borndate" name="borndate" type="date" value="{{$users->borndate}}" required>

              @error('borndate')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror
        </div>






        <div class="w-full md:w-2/2 px-3">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="photo">
                FOTO DE PERFIL
            </label>

            <img src="{{url($users->photo)}}" alt="Foto de perfil">


            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('photo')
                border-red-500
                @enderror"
                id="photo" name="photo" type="file">

                @error('photo')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror

        </div>


        <div class="w-full md:w-2/2 px-3">

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                EDITAR
              </button>

        </div>




        </div>







    </form>

@endsection
