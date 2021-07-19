@extends('adminlte::page')

@section('title', 'Servicios')
    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')
    <div class="container">
        
        @can('admin.servicios.create')
        <a href="{{ route('servicio.create') }}"><button class="btn btn-primary">Crear Servicio</button></a>
        @endcan

        <div class="table-responsive">
            <table class="table">
                <td>Servicio</td>
                <td>Tecnico</td>
                <td>Ciudad</td>
                <td>Direccion</td>
                <td>Descripcion</td>
                <td>Valor</td>
                <td>Estado</td>
                <td>Acciones</td>
                @forelse($servicio as $serv)
                    <tr>
                        <td>{{ $serv->servnombre }}</td>
                        <td>{{ $serv->pernombre }}</td>
                        <td>{{ $serv->ciudnombre }}</td>
                        <td>{{ $serv->direccion }}</td>
                        <td>{{ $serv->descripcion }}</td>
                        <td>{{ $serv->valor }}</td>
                        <td>{{ $serv->estado }}</td>
                        <td>

                            @can('admin.servicios.edit')
                            <a href="{{ route('servicio.edit', $serv->idServicio) }}"><button class="btn btn-warning"><i
                                class="fas fa-pen"></i></button></a>
                            @endcan
                        </td>
                        <td>
                            @can('admin.servicios.destroy')
                                <a href="{{ route('servicio.destroy', $serv->idServicio) }}"
                                    onclick="return confirm('¿Esta seguro de eliminar este servicio?')"><button
                                        class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></a>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <br>
                    <p>No existen servicios</p>
                @endforelse
            </table>
        </div>
    </div>

@endsection
