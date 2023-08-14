@extends('adminlte::page')

@section('title', 'Trapape-Panel')

@section('content_header') 
    @can ('admin.users.create')<a class="btn btn-outline-success float-right" href="{{route('admin.users.create')}}">Agregar usuario</a>@endcan
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('sitio/css/paginador_admin.css') }}">
@stop
