@extends('adminlte::page')

@section('title', 'Trapape-Panel')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
                @include('admin.roles.partials.form')

            {!! Form::submit('Crear nuevo rol', ['class' => 'btn btn-outline-success']) !!}

            {!! Form::close() !!}
        </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
