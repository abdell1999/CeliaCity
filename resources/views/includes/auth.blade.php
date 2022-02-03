<!-- MODAL DE LOGIN -->


<main>
    <article>
  <div class="container">
    <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
      Acceder
    </button>
  </div>

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <input type="email" class="form-control" name="email"  id="email" placeholder="Correo">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
              </div>
              <button type="button" class="btn btn-info btn-block btn-round">Acceder</button>
            </form>


            <div class="d-flex justify-content-center social-buttons">


          </div>
        </div>
      </div>
        <div class="modal-footer d-flex justify-content-center">
          <div class="signup-section">¿No estas registrado? <a href="/register" class="text-info">Registrate</a>.</div>
        </div>
    </div>
  </div>
  </div>
    </article>
   </main>
