@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Registrarse</h4>
                        </div>
                        <form action="{{ route('register') }}">
                        <form class="user" >
                            <div class="row mb-3">
                                <div class="col-sm-4 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="name" placeholder="Nombre" name="name"></div>
                                <div class="col-sm-4"><input class="form-control form-control-user" type="text" id="surname1" placeholder="Primer Apellido" name="surname1"></div>
                                <div class="col-sm-4"><input class="form-control form-control-user" type="text" id="surname2" placeholder="Segundo Apellido" name="surname2"></div>
                            </div>
                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Correo electrónico" name="email"></div>

                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="phone" id="phone" placeholder="Número teléfono fijo" name="phone"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="phone" id="movilphone" placeholder="Télefono móvil" name="movilphone"></div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Contraseña" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repita la contraseña" name="password_repeat"></div>
                            </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Registrarse</button>
                            <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="forgot-password.html">¿Has olvidado tu contraseña?</a></div>
                        <div class="text-center"><a class="small" href="login.html">¿Tienes cuenta? Inicia sesión!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
