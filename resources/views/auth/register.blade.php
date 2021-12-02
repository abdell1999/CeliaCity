@extends('layouts.app')

@section('content')


    <!-- NUEVO FORMULARIO REGISTRO -->

    <form class="w-full max-w-lg" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Nombre
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="name" name="name" type="text">

            </div>
            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="surname1">
                    Primer apellido
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="surname1" name="surname1" type="text"">
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
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email">


        </div>


        <div class="w-full md:w-3/3 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                DIRECCIÓN
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="address" name="address" type="text">


        </div>



        <div class="w-full md:w-1/2 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="movilphone">
                TELÉFONO MÓVIL
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="movilphone" name="movilphone" type="number">


        </div>

        <div class="w-full md:w-1/2 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                TELÉFONO FIJO
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" name="phone" type="number">


        </div>

        <div class="w-full md:w-2/2 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="borndate">
                FECHA DE NACIMIENTO
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="borndate" name="borndate" type="date">


        </div>



        <div class="w-full md:w-1/2 px-3">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
                Contraseña
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="password" name="password" type="password">

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
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="photo" name="photo" type="file">

        </div>


        <div class="w-full md:w-2/2 px-3">

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                REGISTRARSE
              </button>

        </div>




        </div>







    </form>

@endsection
