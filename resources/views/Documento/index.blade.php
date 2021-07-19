@extends('adminlte::page')

@section('title', 'Documentos')
    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Documentos</h1>
@stop
@section('content')
    <div class="container">
        
        @can('admin.documentos.create')
        <a class="" href="{{ route('documento.create') }}"><button class="btn btn-primary">Crear documento</button></a>
        @endcan

        <div class="table-responsive">
            <table class="table">
                <td>Código</td>
                <td>Servicio</td>
                <td>Archivos adjuntos</td>
                <td>Observaciones</td>
                <td>Estado</td>
                <td>Acciones</td>
                @forelse($documento as $fila)
                    <tr>
                        <td>{{ $fila->idDocumento }}</td>
                        <td>{{ $fila->idTiposervicio }}</td>
                        <td><a href="{{ asset('ArchivosAdjuntos/' . $fila->archivosAdjuntos) }}">Descargar</a></td>
                        <td>{{ $fila->observaciones }}</td>
                        <td>{{ $fila->estado }}</td>
                        <td>
                            @can('admin.documentos.edit')
                            <a href="{{ route('documento.edit', $fila->idDocumento) }}"><button class="btn btn-warning"><i
                                class="fas fa-pen"></i></button></a>
                            @endcan
                        </td>
                        <td>
                            @can('admin.documentos.destroy')
                                <a href="{{ route('documento.destroy', $fila->idDocumento) }}"
                                    onclick="return confirm('¿Esta seguro de eliminar este documento?')"><button
                                        class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></a>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <br>
                    <p>No existen documentos</p>
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
