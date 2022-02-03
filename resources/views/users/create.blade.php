@extends('layouts.app')

@section('content')


    <!-- NUEVO FORMULARIO REGISTRO -->

    <form class="w-full max-w-lg" method="POST" action = "{{ route('users.store') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Nombre
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('name')
                    border-red-500
                    @enderror"
                    id="name" name="name" type="text" required>


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
                    id="surname1" name="surname1" type="text" required>
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
                id="surname2" name="surname2" type="text"">
      </div>


        <div class="w-full md:w-3/3 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                EMAIL
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email')
              border-red-500
              @enderror" id="email" name="email" type="email" required>


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
              @enderror" id="address" name="address" type="text" required>
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
              @enderror" id="movilphone" name="movilphone" type="number" required>

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
              @enderror" id="phone" name="phone" type="number" required>

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
              @enderror" id="borndate" name="borndate" type="date" required>

              @error('borndate')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror
        </div>



        <div class="w-full md:w-1/2 px-3">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                Contraseña
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('password')
                border-red-500
                @enderror"
                id="password" name="password" type="password" required>

                @error('password')
                                        <p class="text-red-500 text-xs italic">
                                            {{ $message }}
                                        </p>
                    @enderror

        </div>

        <div class="w-full md:w-1/2 px-3">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password-confirm">
                Confirma la contraseña
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="password-confirm" name="password_confirmation" type="password">

        </div>


        <div class="w-full md:w-2/2 px-3">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="photo">
                FOTO DE PERFIL
            </label>
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



        <div class="w-full md:w-1/2 px-3">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rol">
                Seleccione el rol del usuario:
            </label>
            <select class="form-select appearance-none
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding bg-no-repeat
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="rol" id="rol">

                <option value="0">Administrador</option>
                <option value="1">Editor</option>
                <option value="2">Usuario</option>
            </select>

        </div>


        <div class="w-full md:w-2/2 px-3">

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                REGISTRARSE
              </button>

        </div>




        </div>







    </form>

@endsection
