@extends('adminlte::page')

@section('title', 'Trapape-Panel')

@section('content_header')
  <h1>Crear nuevo post</h1>
@stop

@section('content')
<div class="card">
        <div class="card-body">
                {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}
                   
                    @include('admin.posts.partials.form')
                    
                    <div class="sep_op">{!! Form::submit('Crear post', ['class' => 'btn btn-outline-success']) !!}</div>
                        
                {!! Form::close() !!}
        </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('sitio/css/panel_admin.css') }}" rel="stylesheet" />
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    ClassicEditor
    .create( document.querySelector( '#extract' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
        console.error( error );
    } );

    //cambiar imagen
  
    document.getElementById("file").addEventListener('change', cambiarImagen);
        function cambiarImagen(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };
        reader.readAsDataURL(file);
        }

</script>
@stop