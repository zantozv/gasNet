@extends('adminlte::page')

@section('title','Tipos de Servicio')
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
        <h1>Editar Servicios</h1>
@stop

@section('content')
    <div class="container">
        <div class="abs-center">
            <form action="{{ route('servicio.update',$servicios->idServicio) }}" method="put" class="border p-3 form">
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
                    <div class="form-group col-md-6">

                        <label for="name">Tecnico</label><br>
                        <select name="idUsuario" id="idUsuario">
                           
                            @forelse($tecnicos as $users)
                            <option value="{{ $users->id }}">{{ $users->name }}</option>
                        @empty
                        @endforelse
                            
                            
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nombre">Ciudad</label><br>
                        <select name="idCiudad" id="idCiudad">
                           
                            @forelse($ciudades as $ciudad)
                            <option value="{{ $ciudad->idCiudad }}">{{ $ciudad->nombre }}</option>
                        @empty
                        @endforelse
                           
                        </select>
                    </div>
                    
                    <label for="nombre">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $servicios->direccion }}">
                    <label for="nombre">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion"value="{{ $servicios->descripcion }}">
                    <label for="nombre">Precio</label>
                    <input type="number" class="form-control" name="valor" id="valor" value="{{ $servicios->valor }}">
                    <label for="nombre">Estado</label>
                    <select name="estado" id="estado">
                        <option value="{{ $servicios->estado }}"></option>
                        <option value="">En revisión</option>
                        <option value="">Comiezo</option>
                        <option value="">Instalacion tuberias</option>
                        <option value="">Resane paredes y pisos</option>
                        <option value="">Valvulación</option>
                        <option value="">Espera certificación</option>
                        <option value="">Terminación detalles</option>
                        <option value="">Entrega servicio</option>
                    </select>



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