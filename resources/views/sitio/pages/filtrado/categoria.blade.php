@extends('sitio.layout.principal')
    @section('contenido')
    <section class="justify-content-center align-items-center" id="g">
        <div class="container">
        <h1 class="text-center text_h1 titulo_blog">Categoría: {{ $category->name }}</h1>
            <div class="row justify-content-center">
            @foreach ($posts as $post)
                <div class="col-lg-6 d-flex-column justify-content-center">
                    <article class="cont_arti">
                        @if ($post->image)
                          <img class="img_arti" src="{{Storage::url($post->image->url)}}" alt="">
                        @else
                         <img class="img_arti" src="https://cdn.pixabay.com/photo/2021/09/16/16/15/forest-6630513_1280.jpg" alt="">
                        @endif

                        <a href="{{route('sitio.articulo', $post)}}"><h2 class="title_categoria">{{ $post->name }}</h2></a>
                        <div class="txt_contenido">{!!$post->extract!!}</div>
                        <div class="cont_etiqueta separador">
                                @foreach ($post->tags as $tag)
                                    <a class="etiqueta" style="background: {{$tag->color}};" href="{{route('sitio.filtrado.tag', $tag)}}">{{$tag->name}}</a>
                                @endforeach
                        </div>
                    </article>
                </div>
            @endforeach
            </div>
        </div>
    </section>

<div class="pagination-container">
  <ul class="pagination">
    @if ($posts->currentPage() > 1)
      <li class="page-item">
        <a href="{{ $posts->previousPageUrl() }}" class="page-link">&laquo; Previous</a>
      </li>
    @endif

    @for ($i = 1; $i <= $posts->lastPage(); $i++)
      <li class="page-item {{ $posts->currentPage() === $i ? 'active' : '' }}">
        <a href="{{ $posts->url($i) }}" class="page-link">{{ $i }}</a>
      </li>
    @endfor

    @if ($posts->hasMorePages())
      <li class="page-item">
        <a href="{{ $posts->nextPageUrl() }}" class="page-link">Next &raquo;</a>
      </li>
    @endif
  </ul>
</div>
@endsection