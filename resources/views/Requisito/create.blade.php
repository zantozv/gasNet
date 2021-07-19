@extends('adminlte::page')
@section('title','Requisitos')
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
        <h1>Requisitos</h1>
@stop

@section('content')
<div class="container">
    <div class="abs-center">
        <form action="{{ route('requisito.store') }}" method="post" class="border p-3 form">
            @csrf       
            <div class="form-group">
                <label for="nombre">Tipo de Servicio</label><br>
                <select name="idTiposervicio" id="idTiposervicio">
                    @forelse($tiposervicios as $tiposervicio)
                    <option value="{{ $tiposervicio->idTiposervicio }}">{{ $tiposervicio->nombre }}</option>
                @empty
                @endforelse
                   
                </select><br>

                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Digite el nombre del requisito">
                <label for="nombre">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" id="observaciones" placeholder="Digite las observaciones">
                
            </div>
            <button class="btn btn-primary"><i class="fas fa-check">Crear</i></button>
        </form>
    </div>
</div>
    
@endsection