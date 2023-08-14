@extends('adminlte::page')

@section('title', 'Trapape-Panel')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <p class="h5">Usted esta editando al usuario:</p>
            <p class="form-control">{{$user->name}}</p>
            <div class="sep_cam">
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
              @foreach ($roles as $role)
                    <div>
                            
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}  
                            {{$role->name}} 
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Editar rol', ['class' => 'btn btn-outline-success mt-2']) !!}
            {!! Form::close() !!}
            </div>

            <div class="sep_cam">
            {!! Form::model($user, ['route' => ['admin.users.update2', $user], 'method' => 'put']) !!}
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
                    {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'minlength' => 8]) !!}
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {!! Form::submit('Editar usuario', ['class' => 'btn btn-outline-success mt-2']) !!}
            {!! Form::close() !!}
            </div>

            
            

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('sitio/css/paginador_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('sitio/css/panel_admin.css') }}">
@stop
