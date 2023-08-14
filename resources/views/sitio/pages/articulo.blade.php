@extends('sitio.layout.principal')
    @section('contenido')
<section class="justify-content-center align-items-center mar_con" id="gif_mantenimiento">
        <div class="container">
            <!-- Nombre del articulo-->
            <h1 class="text_h1 text-center marg_bottom">{{$post->name}}</h1>
            <div class="row justify-content-center">
                <div class="txt_art marg_bottom">{!!$post->extract!!}</div>
                <div class="col-lg-9 d-flex-column">
                    <figure>
                        @if ($post->image)
                            <img class="img_arti" src="{{Storage::url($post->image->url)}}" alt="">
                        @else
                            <img class="img_arti" src="https://cdn.pixabay.com/photo/2021/09/16/16/15/forest-6630513_1280.jpg" alt="">
                        @endif
                    </figure>
                    <!-- Contenido del articulo-->
                    <div class="txt_contenido">{!!$post->body!!}</div>
                </div>
                <!-- Contenido relacionado-->
                <div class="col-lg-3 d-flex-column">
                    <aside class="cont_emi">
                        <h2 class="text-center">Más en {{$post->category->name}}</h2>
                        <ul>
                            @foreach ($similares as $similar)
                                <li>
                                    <a href="{{route('sitio.articulo', $similar)}}">
                                    @if ($similar->image)
                                        <img src="{{Storage::url($similar->image->url)}}" alt="">
                                    @else
                                        <img src="https://cdn.pixabay.com/photo/2021/09/16/16/15/forest-6630513_1280.jpg" alt="">
                                    @endif
                                        
                                    </a>
                                    <span>{{$similar->name}}</span>
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
</section>  

@endsection