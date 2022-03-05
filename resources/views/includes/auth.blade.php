<style>


    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 600px;
        }

        .modal-dialog .modal-content {
            padding: 1rem;
        }
    }

    .modal-header .close {
        margin-top: -1.5rem;
    }

    .form-title {
        margin: -2rem 0rem 2rem;
    }

    .btn-round {
        border-radius: 3rem;
    }

    .delimiter {
        padding: 1rem;
    }

    .social-buttons .btn {
        margin: 0 0.5rem 1rem;
    }

    .signup-section {
        padding: 0.3rem 0rem;
    }


    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: 300;
        font-smoothing: antialiased;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 15px;
        background: #eee;
    }

    .intro {
        background: #fff;
        padding: 60px 30px;
        color: #333;
        margin-bottom: 15px;
        line-height: 1.5;
        text-align: center;
    }

    .intro h1 {
        font-size: 18pt;
        padding-bottom: 15px;

    }

    .intro p {
        font-size: 14px;
    }

    .action {
        text-align: center;
        display: block;
        margin-top: 20px;
    }

    a.btn {
        text-decoration: none;
        color: #666;
        border: 2px solid #666;
        padding: 10px 15px;
        display: inline-block;
        margin-left: 5px;
    }

    a.btn:hover {
        background: #666;
        color: #fff;
        transition: .3s;
        -webkit-transition: .3s;
    }

    .btn:before {
        font-family: FontAwesome;
        font-weight: normal;
        margin-right: 10px;
    }

    .github:before {
        content: "\f09b"
    }

    .down:before {
        content: "\f019"
    }

    .back:before {
        content: "\f112"
    }

    .credit {
        background: #fff;
        padding: 12px;
        font-size: 9pt;
        text-align: center;
        color: #333;
        margin-top: 40px;

    }

    .credit span:before {
        font-family: FontAwesome;
        color: #e41b17;
        content: "\f004";


    }

    .credit a {
        color: #333;
        text-decoration: none;
    }

    .credit a:hover {
        color: #1DBF73;
    }

    .credit a:hover:after {
        font-family: FontAwesome;
        content: "\f08e";
        font-size: 9pt;
        position: absolute;
        margin: 3px;
    }

    main {

        padding: : 20px;

    }

    article li {
        color: #444;
        font-size: 15px;
        margin-left: 33px;
        line-height: 1.5;
        padding: 5px;
    }

    article h1,
    article h2,
    article h3,
    article h4,
    article p {
        padding: 14px;
        color: #333;
    }

    article p {
        font-size: 15px;
        line-height: 1.5;
    }

    @media only screen and (min-width: 720px) {
        main {
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            padding:24px;
        }


    }

    .set-overlayer,
    .set-glass,
    .set-sticky {
        cursor: pointer;
        height: 45px;
        line-height: 45px;
        padding: 0 15px;
        color: #333;
        font-size: 16px;
    }

    .set-overlayer:after,
    .set-glass:after,
    .to-active:after,
    .set-sticky:after {
        font-family: FontAwesome;
        font-size: 18pt;
        position: relative;
        float: right;
    }

    .set-overlayer:after,
    .set-glass:after,
    .set-sticky:after {
        content: "\f204";
        transition: .6s;
    }

    .to-active:after {
        content: "\f205";
        color: #008080;
        transition: .6s;
    }

    .set-overlayer,
    .set-glass,
    .set-sticky,
    .source,
    .theme-tray {
        margin: 10px;
        background: #f2f2f2;
        border-radius: 5px;
        border: 2px solid #f1f1f1;
        box-sizing: border-box;
    }

    /* Syntax Highlighter*/

    pre.prettyprint {
        padding: 15px !important;
        margin: 10px;
        border: 0 !important;
        background: #f2f2f2;
        overflow: auto;
    }

    .source {
        white-space: pre;
        overflow: auto;
        max-height: 400px;
    }

    code {
        border: 1px solid #ddd;
        padding: 2px;
        border-radius: 2px;
    }

</style>

<main>
    <article>
        <form method="POST" action="{{ route('login') }}" class="needs-validation">
            @csrf
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-title text-center">
                            <h4>Acceder</h4>
                        </div>
                        <div class="d-flex flex-column text-center">

                                <div class="form-group">
                                    <input type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email" id="email"
                                        placeholder="Correo" required>
                                    <div class="invalid-feedback">Correo incorrecto</div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Contraseña" required>
                                    <div class="invalid-feedback">Contraseña Incorrecta</div>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Correo o contraseña incorrectos</strong>
                                </span>
                                @enderror
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Correo o contraseña incorrectos</strong>
                                </span>
                                @enderror
                                <input type="submit" class="btn btn-info btn-block btn-round" value="Acceder">
                            </form>


                            <div class="d-flex justify-content-center social-buttons">


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <div class="signup-section">¿No estas registrado? <a href="#"
                                class="text-info" data-toggle="modal" onclick="" data-target="#registerModal">Registrate</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<form id="logoutForm" action="{{ route('logout') }}" method="POST" >
    @csrf
</form>

<!-- Registro MODAL-->

<main>
    <article>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="formulario" class="needs-validation" novalidate>
        @csrf
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-title text-center">
                            <h4>Registro</h4>
                        </div>
                        <div class="d-flex flex-column text-center">
                                @csrf
                                <div class="input-group mb-3 ">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nombre" required>
                                        <div class="invalid-feedback">Nombre incorrecto</div>
                                        <span class="pl-3"></span>
                                    <input type="text" class="form-control" name="surname1" id="surname1"
                                        placeholder="Primer Apellido" required>
                                        <div class="invalid-feedback">Introduce tus Apellidos</div>
                                        <span class="pl-3"></span>
                                    <input type="text" class="form-control" name="surname2" id="surname2"
                                        placeholder="Segundo Apellido">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Correo" required>
                                        <div class="invalid-feedback">Correo incorrecto</div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Dirección">
                                </div>


                                <div class="input-group mb-3 ">

                                    <input type="number" class="form-control" name="movilphone" id="movilphone"
                                        placeholder="Teléfono móvil" required>
                                        <div class="invalid-feedback">El numero de telefono tiene 9 caracteres</div>
                                        <span class="pl-3">
                                        </span>
                                    <input type="number" class="form-control" name="phone" id="phone"
                                        placeholder="Teléfono fijo">

                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="borndate" id="borndate"
                                            placeholder="Fecha de nacimiento" required>
                                        <div class="invalid-feedback">Error Fecha</div>
                                    </div>


                                <div class="input-group mb-3 ">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Contraseña" required>
                                        <div class="invalid-feedback">Contraseña necesita 9 caracteres y una mayuscula</div>
                                        <span class="pl-3">
                                        </span>
                                     <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                                        placeholder="Repite tu contraseña" required>
                                        <div class="invalid-feedback">Contraseña incorrecta</div>
                                </div>
                                <div class="form-group">
                                <input type="file" class="form-control" name="photo" id="photo"
                                placeholder="Introduce la foto">
                                </div>
                                <button type="submit" class="btn btn-info btn-block btn-round" id="registro" value="Registro">
                                    Registro
                                </button>
                            </form>


                            <div class="d-flex justify-content-center social-buttons">


                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </article>
</main>

<script>

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


$("#logoutBtn").click(function(evento){
    evento.preventDefault();

    $("#logoutForm").submit();
});

</script>






