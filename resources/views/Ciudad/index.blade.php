@extends('adminlte::page')

@section('title', 'Ciudades')
    {{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Ciudades</h1>
@stop
@section('content')
    <div class="container">
        
        @can('admin.ciudades.create')
        <a class="" href="{{ route('ciudad.create') }}"><button class="btn btn-primary">Crear ciudad</button></a>
        @endcan

        <div class="table-responsive">
            <table class="table">
                <td>Código</td>
                <td>Nombre</td>
                <td>Acciones</td>
                @forelse($ciudades as $fila)
                    <tr>
                        <td>{{ $fila->idCiudad }}</td>
                        <td>{{ $fila->nombre }}</td>
                        <td>
                            @can('admin.ciudades.edit')
                            <a href="{{ route('ciudad.edit', $fila->idCiudad) }}"><button class="btn btn-warning"><i
                                class="fas fa-pen"></i></button></a>
                            @endcan
                        </td>
                        <td>
                            @can('admin.ciudades.destroy')
                                <a href="{{ route('ciudad.destroy', $fila->idCiudad) }}"
                                    onclick="return confirm('¿Esta seguro de eliminar esta ciudad?')"><button
                                        class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></a>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <br>
                    <p>No existen ciudades</p>
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
