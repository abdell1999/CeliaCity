@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" novalidate>
                        @csrf





                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="surname1" class="col-md-4 col-form-label text-md-right">Primer apellido:</label>

                            <div class="col-md-6">
                                <input id="surname1" type="text" class="form-control @error('surname1') is-invalid @enderror" name="surname1" value="{{ old('surname1') }}" required autocomplete="surname1" autofocus>

                                @error('surname1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="surname2" class="col-md-4 col-form-label text-md-right">Segundo apellido:</label>

                            <div class="col-md-6">
                                <input id="surname2" type="text" class="form-control @error('surname2') is-invalid @enderror" name="surname2" value="{{ old('surname2') }}" autocomplete="surname2" autofocus>

                                @error('surname2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>









                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Dirección</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="movilphone" class="col-md-4 col-form-label text-md-right">Teléfono móvil</label>

                            <div class="col-md-6">
                                <input id="movilphone" type="number" class="form-control @error('movilphone') is-invalid @enderror" name="movilphone" required autocomplete="movilphone">

                                @error('movilphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono fijo:</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="borndate" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento:</label>

                            <div class="col-md-6">
                                <input id="borndate" type="date" class="form-control @error('borndate') is-invalid @enderror" name="borndate">

                                @error('borndate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>









                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirma la contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>







                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Foto de perfil:</label>
                            <div class="col-md-6">
                            <input type="file" class="form-control" name="photo">
                            @error('photo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                        </div>















                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
