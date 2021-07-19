@extends('adminlte::page')
@section('title', 'Requisitos')
    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Requisitos</h1>
@stop
@section('content')
    <div class="container">
        
        @can('admin.requisitos.create')
        <a class="" href="{{ route('requisito.create') }}"><button class="btn btn-primary">Crear requisito</button></a>
        @endcan

        <div class="table-responsive">
            <table class="table">
                <td>Código</td>
                <td>Servicio</td>
                <td>Nombre</td>
                <td>Observaciones</td>
                <td>Acciones</td>
                @forelse($requisito as $ciudad)
                    <tr>
                        <td>{{ $ciudad->idRequisito }}</td>
                        <td>{{ $ciudad->servnombre }}</td>
                        <td>{{ $ciudad->nombre }}</td>
                        <td>{{ $ciudad->observaciones }}</td>
                        <td>
                            @can('admin.requisitos.edit')
                            <a href="{{ route('requisito.edit', $ciudad->idRequisito) }}"><button
                                class="btn btn-warning"><i class="fas fa-pen"></i></button></a>
                            @endcan
                        </td>
                        <td>
                            @can('admin.requisitos.destroy')
                                <a href="{{ route('requisito.destroy', $ciudad->idRequisito) }}"
                                    onclick="return confirm('¿Esta seguro de eliminar este requisito?')"><button
                                        class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></a>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <br>
                    <p>No existen requisitos</p>
                @endforelse
            </table>
        </div>
    </div>

@endsection
