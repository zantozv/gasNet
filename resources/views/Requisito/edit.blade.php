@extends('adminlte::page')

@section('title','Requisitos')
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
        <h1>Editar Requisitos</h1>
@stop

@section('content')
<div class="container">
    <div class="abs-center">
        <form action="{{ route('requisito.update',$requisito->idRequisito) }}" method="put" class="border p-3 form">
            @csrf       
            <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="nombre">Servicio</label><br>
                    <select name="idTiposervicio" id="idTiposervicio">
                        @forelse($tiposervicios as $tiposervicio)
                        <option value="{{ $tiposervicio->idTiposervicio }}">{{ $tiposervicio->nombre }}</option>
                    @empty
                    @endforelse
                       
                    </select>
                </div>
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $requisito->nombre }}">
            </div>
            <div class="form-group">
                <label for="nombre">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" id="observaciones" value="{{ $requisito->observaciones }}">
            </div>
            <button class="btn btn-primary"><i class="fas fa-check">Actualizar</i></button>
        </form>
    </div>
</div>
    
@endsection
@section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
    )
</script>
@stop