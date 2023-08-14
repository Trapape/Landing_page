@extends('adminlte::page')

@section('title', 'Trapape-Panel')

@section('content_header')
    <h1>Crear nuevo usuario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'required', 'maxlength' => 255]) !!}
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Correo electrónico') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'required', 'maxlength' => 255]) !!}
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'required', 'minlength' => 8]) !!}
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmar contraseña') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'required']) !!}
        </div>

        {!! Form::submit('Crear usuario', ['class' => 'btn btn-outline-success']) !!}

        {!! Form::close() !!}
        </div>
    </div>

 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop