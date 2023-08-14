
  <nav class="navbar navbar-expand-xxl">
  <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="{{route('sitio.index')}}" class="logo d-flex align-items-center navbar-brand">
      <img src="{{ asset('imagenes/Logo-Trapape.png') }}" alt="Logo de Trapape"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav text-center">
        <li class="nav-item">
          <a class="nav-link separador" aria-current="page" href="{{route('sitio.index')}}#inicio">Inicio</a>
        </li>
        <li class="nav-item">
         <a class="nav-link separador" href="{{route('sitio.index')}}#nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link separador" href="{{route('sitio.index')}}#servicios">Servicios</a>
        </li>
        <li class="nav-item">
        <a class="nav-link separador" href="{{route('sitio.index')}}#emisor_intermediario">Emisor o intermediario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link separador" href="{{route('sitio.blog')}}">Blog</a>
          </li>
        <li class="nav-item">
        <a class="nav-link separador" href="{{route('sitio.soporte')}}">Soporte</a>
        </li>
        <li class="nav-item">
        <a class="nav-link separador" href="{{route('sitio.index')}}#contacto" > <button type="button"class="btn btn-outline-success"><span class="Cabin_SemiCondensed-SemiBold text1">Contacto</span></button></a>
        </li>  
        <li class="red_sepa"></li>
        <div class="colu">
          <div class="nav-item">
            <a target="_blank" href="https://www.facebook.com/Trapapemx?mibextid=ZbWKwL"><img class="redes" src="{{ asset('imagenes/icon/facebook2.svg') }}" alt="Icono de Facebook"></a>
          </div>
          <div class="nav-item">
            <a target="_blank" href="https://mx.linkedin.com/company/trapapemx"><img class="redes" src="{{ asset('imagenes/icon/linkedin2.svg') }}" alt="Icono de Linkedin"></a>
          </div>
          <div class="nav-item">
            <a target="_blank" href="https://www.youtube.com/@trapApE_"><img class="redes" src="{{ asset('imagenes/icon/youtube2.svg') }}" alt="Icono de Youtube"></a>
          </div>
        </div>
      </ul> 
    </div>

    
  </div>
</nav>
