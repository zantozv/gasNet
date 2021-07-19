@extends('adminlte::page')

@section('title','Requisitos')
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
        <h1>Editar Documentos</h1>
@stop

@section('content')
<div class="container">
    <div class="abs-center">
        <form action="{{ route('documento.update',$documento->idDocumento) }}" method="put" class="border p-3 form">
            @csrf       
            <div class="form-group">
                <div class="form-group col-md-6">
                    <label for="nombre">Servicio</label><br>
                    <select name="idTiposervicio" id="idTiposervicio">
                        @forelse($servicios as $servicio)
                        <option value="{{ $servicio->idServicio }}">{{ $servicio->idTiposervicio}}</option>
                    @empty
                    @endforelse
                       
                    </select>
                </div>
                <label for="nombre">Archivos Adjuntos</label>
                <input type="file" class="form-control" name="nombre" id="nombre" value="{{ $documento->archivosAdjuntos }}">
            </div>
            <div class="form-group">
                <label for="nombre">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" id="observaciones" value="{{ $documento->observaciones }}">
            </div>
            <div class="form-group">
                <label for="nombre">Estado</label>
                <input type="text" class="form-control" name="observaciones" id="observaciones" value="{{ $documento->estado }}">
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



