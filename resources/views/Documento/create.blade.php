@extends('adminlte::page')

@section('title','Documentos')
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
        <h1>Crear Documentos</h1>
@stop

@section('content')
<div class="container">
    <div class="abs-center">
        <form action="{{ route('documento.store') }}" method="post"  enctype="multipart/form-data" class="border p-3 form">
            @csrf       
            <div class="form-group">
                <label for="nombre">Servicio</label>
                <select name="idTiposervicio" class="form-control">
                    <option value="">--Servicio--</option>
                    @forelse ($servicios as $doc)
                        <option value="{{$doc->idServicio}}">{{$doc->idTiposervicio}}</option>
                    @empty
                        
                    @endforelse
                </select>
                
                <label for="nombre">Adjuntar Archivos</label> <br>
                <input type="file" name="archivosAdjuntos" id="archivosAdjuntos"> <br><br>
                <label for="nombre">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" id="email" placeholder="Digite las observaciones">
                <label for="nombre">Estado</label>
                <select name="estdado" id="estado">
                    <option value="">-Elija el estado del documento-</option>
                    <option value="">Sin revisar</option>
                    <option value="">En revisión</option>
                    <option value="">Correcto</option>
                    <option value="">Incorrecto </option>
                </select>
                
            </div>
            <button class="btn btn-primary"><i class="fas fa-check">Crear</i></button>
        </form>
    </div>
</div>
    
@endsection