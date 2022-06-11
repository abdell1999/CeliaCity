@extends('layouts.frontpage')

@section('scripts')
        <script src="/assets/js/options.js"></script>
        <script src="/assets/js/profile.js"></script>
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
                <p class="text-muted mb-0">{{$user->address}} {{$user->rol}}</p>
              </div>
            </div>
                <div class="d-flex justify-content-end mt-2">
                    @if (($user['rol']) == 0)
                    <a href="/users/" class="main-btn wow fadeInLeftBig">Modo Administrador</a>
                    @else
                    <button data-toggle='modal' data-target='#editProfile' type="button" class="btn btn-primary editbtn" value='{{$user->id}}' >Editar</button>
                    <button data-toggle='modal' data-target='#deleteProfile' type="button" class="btn btn-danger ml-2 deletebtn" value="{{$user->id}}">Borrar Mi Perfil</button>
                    @endif
                </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Start Modal Delete Profile -->
  <!-- Modal -->
  <div class="modal fade" id="deleteProfile" tabindex="-1" role="dialog" aria-labelledby="deleteProfileLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteProfileLabel">Borrar Comentario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Seguro que quieres borrar tu perfil?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary delete_profile">Borrar</button>
          <input type="hidden" id="deleteing_id">
        </div>
      </div>
    </div>
  </div>
    <!-- End Modal Delete Profile -->

    <!-- Start Modal Edit Profile -->
    <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editProfileLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editProfileLabel">Editar Mi Perfile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="user_id" value="" />
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                         </div>
                        <input name="" class="form-control edit_name" placeholder="Nombre" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                         </div>
                        <input name="" class="form-control edit_surname1" placeholder="Primer Apellido" type="text">
                        <input name="" class="form-control edit_surname2" placeholder="Segundo Apellido" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                         </div>
                        <input name="" class="form-control edit_email" placeholder="Correo Electronico" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                         </div>
                        <input name="" class="form-control edit_address" placeholder="Dirección" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-mobile"></i> </span>
                        </div>
                        <input name="" class="form-control edit_movilphone" placeholder="Teléfono Movil" type="text">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <input name="" class="form-control edit_phone" placeholder="Teléfono Fijo" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                         </div>
                        <input name="" class="form-control edit_borndate" placeholder="Fecha de Nacimiento" type="date">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control edit_pass" placeholder="Contraseña" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control edit_pass1" placeholder="Repite la contraseña" type="text"password">
                    </div> <!-- form-group// -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary update_profile" type="submit" method="POST" action = "#"
                  enctype="multipart/form-data">Editar Mi Perfil</button>
                </div>
                </form>
          </div>
        </div>
      </div>
    <!-- End Modal Edit Profile -->
@endif

@endsection
