@extends('layouts.frontpage')

@section('scripts')
    <script src="/assets/js/comentarios.js"></script>
@endsection

@section('content')

@if(@Auth::user())
<section style="background-color: #eee;">
  
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 shadow-lg">
          <div class="card-body text-center m-1">
            <img src="{{$user->photo}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{$user->name }}</h5>
            <!--
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            -->
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4 shadow-lg">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombre</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->name}} {{$user->surname1}} {{$user->surname2 }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telf. Movil</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->phone}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telf. Fijo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->movilphone}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Fecha de Nacimiento</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->borndate}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Dirección</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$user->address}}</p>
              </div>
            </div>
                <div class="d-flex justify-content-end mt-2">
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger ml-2">Borrar Usuario</button>
                </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@endsection