<!DOCTYPE html>
<html lang="en">
<head>
   @include('sitio.includes.head')
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    @include('sitio.includes.menu')
</nav>
<header>
    <h1 class="site-heading text-center text-faded d-none d-lg-block">
        <span class="site-heading-upper text-primary mb-3">Trapape</span>
        <span class="site-heading-lower">...</span>
    </h1>
</header>

    @yield("contenido")

<footer class="footer text-faded text-center py-5">
    @include('sitio.includes.footer')
 </footer>
    @include('sitio.includes.scripts')
</body>
</html>
