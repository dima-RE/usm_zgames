<!-- obtiene la planilla de master-->
@extends("layouts.master")

<!-- crea el contenido de la pagina -->
@section("contenido")

    <div class="row mt-5-">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-light">
                    <span>Agregar Consola</span>
                </div>
                <div class="card-body">
                    <div class="mb3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb3">
                        <label for="marca-select" class="form-label">Marca</label>
                        <select id="marca-select" class="form-select">
                            
                        </select>
                    </div>
                    <div class="mb3">
                        <label for="anno-txt" class="form-label">Anno Lanzamiento</label>
                        <input type="number" id="anno-txt" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')

    <script src="{{asset('js/home.js')}}"></script>

@endsection