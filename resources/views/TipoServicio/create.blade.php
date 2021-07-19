@extends('adminlte::page')

@section('title','Tipos de Servicio')
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
        <h1>Crear Tipos De Servicio</h1>
@stop


@section('content')
<div class="container">
    <div class="abs-center">
        <form action="{{ route('tiposervicio.store') }}" method="post" class="border p-3 form">
            @csrf       
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Digite el nombre del tipo de servicio">
            </div>
            <button class="btn btn-primary"><i class="fas fa-check">Crear</i></button>
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