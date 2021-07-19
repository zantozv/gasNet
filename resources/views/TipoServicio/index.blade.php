@extends('adminlte::page')

@section('title', 'Tipos de Servicio')
    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Tipos De Servicio</h1>
@stop


@section('content')
    <div class="container">
        
        @can('admin.tiposervicios.create')
        <a class="" href="{{ route('tiposervicio.create') }}"><button class="btn btn-primary">Crear tipo
            servicio</button></a>
        @endcan

        <div class="table-responsive">
            <table class="table">
                <td>Código</td>
                <td>Nombre</td>
                <td>Acciones</td>
                @forelse($tiposervicio as $fila)
                    <tr>
                        <td>{{ $fila->idTiposervicio }}</td>
                        <td>{{ $fila->nombre }}</td>
                        <td>
                            @can('admin.tiposervicios.edit')
                            <a href="{{ route('tiposervicio.edit', $fila->idTiposervicio) }}"><button
                                class="btn btn-warning"><i class="fas fa-pen"></i></button></a>
                            @endcan
                        </td>
                        <td>
                            @can('admin.tiposervicios.destroy')
                                <a href="{{ route('tiposervicio.destroy', $fila->idTiposervicio) }}"
                                    onclick="return confirm('¿Esta seguro de eliminar el tipo de servicio?')"><button
                                        class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></a>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <br>
                    <p>No existen tipos de servicio</p>
                @endforelse
            </table>
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
