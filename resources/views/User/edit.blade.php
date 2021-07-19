@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{ $id->name }}</p>

            {!! Form::model($user, ['route' => ['user.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $rol)
                    <div>
                             <label >
                               {!! Form::checkbox('roles[]',$rol->id, null,['class' => 'mr-1']);!!} 
                                {{$role->name}}
                             </label>
                    </div>
                @endforeach
            {!! Form::close() !!}

            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hola!');
    </script>
@stop
