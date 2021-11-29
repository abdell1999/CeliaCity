@extends("layouts.app")

@section("content")
    <br>
    <div class="row">
        <div class="col">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Nombre Categoria</p>
                </div>
                <div class="card-body">
                    <br>
                    <form action = "{{ route('categorie.store') }}" enctype="multipart/form-data" method = "post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="name"><strong>Nombre</strong></label><input class="form-control" type="text" id="name" placeholder="Nombre" name="name"></div>
                            </div>
                        </div>
                        <div class="mb-3"><input class="btn btn-primary btn-sm" type="submit" value="Enviar"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
