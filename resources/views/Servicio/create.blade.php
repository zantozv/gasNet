@extends('adminlte::page')

@section('title', 'Servicios')
    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Crear Servicios</h1>
@stop


@section('content')
    <div class="container">
        <div class="abs-center">
            <form action="{{ route('servicio.store') }}" method="post" class="border p-3 form">
                @csrf
                <div class="form-group">
                    <div class="form-group col-md-6">
                        <label for="nombre">Servicio</label><br>
                        <select name="idCiudad" id="idCiudad">
                            <option value="">---Seleccionar Servicio---</option>
                            @forelse($tiposervicios as $tiposervicio)
                                <option value="{{ $tiposervicio->idTiposervicio }}">{{ $tiposervicio->nombre }}</option>
                            @empty
                            @endforelse


                        </select>
                    </div>
                    <div class="form-group col-md-6">

                        <label for="name">Tecnico</label><br>
                        <select name="idUsuario" id="idUsuario">
                            <option value="">---Seleccionar Tecnico---</option>
                            @forelse($tecnicos as $users)
                                <option value="{{ $users->id }}">{{ $users->name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nombre">Ciudad</label><br>
                        <select name="idTiposervicio" id="idTiposervicio">
                            <option value="">---Seleccionar Ciudad---</option>
                            @forelse($ciudades as $ciudad)
                                <option value="{{ $ciudad->idCiudad }}">{{ $ciudad->nombre }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <label for="nombre">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion"
                        placeholder="Digite su direccion">
                    <label for="nombre">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion"
                        placeholder="Ingrese una descripcion">
                    <label for="nombre">Precio</label>
                    <input type="number" class="form-control" name="valor" id="valor">
                    <label for="nombre">Estado</label>
                    <select name="estado" id="estado">
                        <option value="">-Elija el estado del servicio-</option>
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
                <button class="btn btn-primary"><i class="fas fa-check">Crear</i></button>
            </form>
        </div>
    </div>

@endsection
