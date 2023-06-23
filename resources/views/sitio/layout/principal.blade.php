<!DOCTYPE html>
<html lang="en">
    <head>
             @include('sitio.includes.head')
    </head>
    <body>
    <!-- Navigation-->
    <header id="header" class="header fixed-top">
          @include('sitio.includes.menu')
    </header>
        <body class="sepa_body">
        
        @yield("contenido")

        </body>

    <footer class="footer py-5">
        @include('sitio.includes.footer')
    </footer>
        @include('sitio.includes.scripts')
    </body>
    
</html>
