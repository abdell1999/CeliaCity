@extends('layouts.app')

@section('content')

    <section class="bg-blueGray-50">
        <div class="w-full mb-12 xl:mb-0 px-10 mx-auto mt-10">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h1 class="font-semibold text-base text-xl text-blueGray-700">Comentarios</h1>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('comments.create') }}"
                                class="bg-indigo-500 text-white text-sm active:bg-indigo-600 font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Añadir Comentario</a>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Fecha
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Valoración
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Comentario
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    id User
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    id Point
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Editar
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
                                    Borrar
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($comments as $comment)
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4  text-blueGray-700">
                                    {{$comment->date}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4  text-blueGray-700">
                                    {{$comment->valoration}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4  text-blueGray-700">
                                    {{$comment->text}}
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4  text-blueGray-700">
                                    @foreach ($users as $user)
                                    @if($comment->id_user == $user->id)
                                        {{$user->name}} {{$user->surname1}} {{$user->surname2}}
                                    @endif
                                    @endforeach
                                </th>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4  text-blueGray-700">
                                    @foreach ($points as $point)
                                    @if($comment->id_pointofinterest == $point->id)
                                        {{$point->name}}
                                    @endif
                                    @endforeach
                                </th>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 ">
                                    <a href="{{ route('comments.edit', $comment->id) }}"
                                        ><i class="far fa-edit" style="color: blue;"></i></a>
                                    </th>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4  text-blueGray-700">
                                        <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="" value="Eliminar">
                                        </form>
                                    </th>
                            </tr>
                                @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

</div>


@endsection
