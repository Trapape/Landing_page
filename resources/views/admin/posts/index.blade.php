@extends('adminlte::page')

@section('title', 'Trapape-Panel')

@section('content_header')
<a class="btn btn-outline-success float-right" href="{{route('admin.posts.create')}}">Nuevo post</a>
    <h1>Listado de post</h1>
@stop

@section('content')
    
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('sitio/css/paginador_admin.css') }}">
@stop
@section('js')
<script src="{{ asset('vendor/livewire/livewire.js') }}"></script>

@stop


