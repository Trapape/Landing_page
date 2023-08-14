@extends('adminlte::page')

@section('title', 'Trapape-Panel')

@section('content_header')
    @can ('admin.roles.create')<a class="btn btn-outline-success float-right" href="{{route('admin.roles.create')}}">Agregar rol</a>@endcan
    <h1>Lista de roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
    <div class="card-header">
     
        <input wire:model="search" class="form-control me-2" placeholder="Search">

    </div>
   <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td with="14px">
                        @can ('admin.roles.edit')<a class="btn btn-outline-secondary btn-sm" href="{{route('admin.roles.edit', $role)}}">Editar</a>@endcan
                    </td>
                    <td with="14px">
                        @can ('admin.roles.destroy')
                        <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                        @csrf    
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                        </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
   </div>
</div>

    
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('sitio/css/paginador_admin.css') }}">
@stop
@section('js')

@stop


