@extends('layouts.frontpage')

@section('scripts')
    <script src="/assets/js/comentarios.js"></script>
@endsection

@section('content')

<section style="background-color: #eee;">
  
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 shadow-lg">
          <div class="card-body text-center m-1">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">John Smith</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4 shadow-lg">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>
                <div class="d-flex justify-content-end mt-2">
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-primary ml-2">Borrar Usuario</button>
                </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection