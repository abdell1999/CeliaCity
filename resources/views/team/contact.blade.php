@extends('layouts.frontpage')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="section-title">
                <h4 class="title text-uppercase fw-normal mb-4">Formulario de <span class="text-primary fw-bold">contacto</span> </h4>

            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row justify-content-center mt-4 pt-2">
        <div class="col-lg-8">
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf
                <p id="error-msg" class="mb-0"></p>
                <div id="simple-msg"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tu Nombre <span class="text-danger">*</span></label>
                            <input name="name" id="name" type="text" class="form-control" placeholder="Nombre :">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tu email <span class="text-danger">*</span></label>
                            <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                        </div>
                    </div><!--end col-->

                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Asunto</label>
                            <input name="subject" id="subject" class="form-control" placeholder="Asunto :">
                        </div>
                    </div><!--end col-->

                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Mensaje <span class="text-danger">*</span></label>
                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Mensaje :"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="">
                            <button type="submit" id="submit" name="send" class="btn rounded-pill w-100 btn-primary">Enviar</button>
                        </div>
                    </div><!--end col-->
                </form></div>

        </div><!--end col-->
    </div>
<br>




@endsection
