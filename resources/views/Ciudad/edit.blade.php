@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
        <h1>EDITE LA CIUDAD</h1>
@stop

@section('content')
<div class="container">
    <div class="abs-center">
        <form action="{{ route('ciudad.update',$ciudades->idCiudad) }}" method="put" class="border p-3 form">
            @csrf       
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $ciudades->nombre }}">
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
        <script>console.log('Hola!');</script>
@stop