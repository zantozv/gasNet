@extends('adminlte::page')



@section('title', 'Crear ciudad')

@section('content_header')
    <h1>Por favor ingrese una ciudad</h1>
@stop

@section('content')
    <div class="container">
        <div class="abs-center">
            <form action="{{ route('ciudad.store') }}" method="post" class="border p-3 form">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"
                        placeholder="Digite el nombre de la ciudad">
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
