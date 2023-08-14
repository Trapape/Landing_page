@extends('sitio.layout.principal')
    @section('contenido')
      
    <section class="justify-content-center align-items-center separador" id="banner_blog">
        <div class="container">
            <!-- Notificación-->
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <div class="group_noti">
                    <img class="img_notifi" src="{{ asset('imagenes/noti_tracto.webp') }}" alt="Conectamos empresas, intermediarios y transportistas con solo unos clics.">
                    <p class="text-notification">Descarga nuestra aplicación <a target="_blank" href="https://play.google.com/store/apps/details?id=com.trapape.consig&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">
                        ahora mismo.
                    </a></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <!-- /Notificación-->

            <div class="titulo_blog text-center">
                <h1 class="text_h1">Blog</h1>
            </div>
            <div class="colu">
                <p class="filtrado">Filtrar por:</p> 
                <div class="dropdown-center red_sepa">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categoría
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item txt_contenido" href="{{route('sitio.filtrado.categoria', $category)}}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="dropdown-center red_sepa">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Etiquetas
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($tags as $tag)
                        <li><a class="dropdown-item txt_contenido" href="{{route('sitio.filtrado.tag', $tag)}}">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="justify-content-center align-items-center" id="contenido_blog">
        <div class="container">
            <div class="row justify-content-center">
            @foreach ($posts as $post)
                <div class="col-lg-6 d-flex-column">
                        <article class="separador" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2021/09/16/16/15/forest-6630513_1280.jpg @endif)">
                            <div class="cont_articulo">
                                <div class="cont_etiqueta">
                                @foreach ($post->tags as $tag)
                                    <a class="etiqueta" style="background: {{$tag->color}};" href="{{route('sitio.filtrado.tag', $tag)}}">{{$tag->name}}</a>
                                @endforeach
                                </div>
                                <h1 class="title_articulo">
                                    <a href="{{route('sitio.articulo', $post)}}">
                                        {{$post->name}}
                                    </a>
                                </h1>
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