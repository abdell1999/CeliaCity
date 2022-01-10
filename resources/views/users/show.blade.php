@extends('layouts.app')
@section('content')

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6" >
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Perfil De Usuario 
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        <!--<img src="https://previews.123rf.com/images/tuktukdesign/tuktukdesign1606/tuktukdesign160600119/59070200-icono-de-usuario-hombre-perfil-hombre-de-negocios-avatar-icono-persona-en-la-ilustraci%C3%B3n-vectorial.jpg?fj=1" alt="noseve" width="50px" heigth="50px"> -->
        <div>
              <label class="block text-sm font-medium text-gray-700">
              </label>
              <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </span>
                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="cambiar">
                  Cambiar
                </button>
              </div>
            </div>
      </p>
    </div>

    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"  >
            Nombre 
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" >
           <input name="name" value="{{$users->name}}" id="name" disabled>
           <button id="editname"><i class="far fa-edit" style="color: blue;"></i></button>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500" >
            Primer Apellido
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" >
          <input name="surname1" value="{{$users->surname1}}"  id="surname1" >
          <button id="editsurname1"><i class="far fa-edit" style="color: blue;"></i></button>
          
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500" >
           Segundo Apellido
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <input name="surname2" value="{{$users->surname2}}" id="surname2" >
          <button id="editsurname2"><i class="far fa-edit" style="color: blue;"></i></button>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500" >
            Dirección
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <input name="address" value="{{$users->address}}"  id="address" disabled>
          <button id="editaddress"><i class="far fa-edit" style="color: blue;"></i></button>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Correo electrónico
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <input type="email" name="email" value="{{$users->email}}"  id="email" disabled>
          <button id="editemail"><i class="far fa-edit" style="color: blue;"></i></button>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Teléfono fijo
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" >
          <input name="phone" value="{{$users->phone}}"  id="phone" disabled>
          <button id="editphone"><i class="far fa-edit" style="color: blue;"></i></button>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Teléfono móvil
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2" >
          <input name="movilphone" value="{{$users->movilphone}}"  id="movilphone" disabled>
          <button id="editmovilphone"><i class="far fa-edit" style="color: blue;"></i></button>
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Fecha De Nacimiento
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <input type="date" name="borndate" value="{{$users->borndate}}"  id="borndate" disabled>
          <button id="editborndate"><i class="far fa-edit" style="color: blue;"></i></button>
          </dd>
        </div>
      </dl>
    </div>
  </div>
<form class="w-full max-w-lg" method="POST" action="{{ route('users.update',['user' => $users->id]) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method("PUT")
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
    EDITAR
  </button>
  </form>
       <script src="/assets/js/jquery-3.6.0.min.js"></script>
      <script src="/assets/js/editarPerfil.js"></script>

@endsection
