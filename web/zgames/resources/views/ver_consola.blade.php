@extends('layouts.master')

@section('contenido')
    
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Anno de Lanzamiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')

    <script src="{{asset('js/consolasService.js')}}"></script>
    <script src="{{asset('js/ver_consola.js')}}"></script>

@endsection