<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('imgs/favicon.ico') }}">
    <title>zIX Engineering</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">zIX Ingeniería</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/servicios#servicios 01">Reducción de Costos</a>
                <a class="dropdown-item" href="/servicios#servicios 02">Servicio Personalizado a Arquitectos</a>
                <a class="dropdown-item" href="/servicios#servicios 03">Equipo</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="proyectos.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyectos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/proyectos#proyectos 01">Residencial</a>
                <a class="dropdown-item" href="/proyectos#proyectos 02">Industrial</a>
                <a class="dropdown-item" href="/proyectos#proyectos 03">Infraestructura</a>
                <a class="dropdown-item" href="/proyectos#proyectos 04">Otros</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="presupuestos.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Presupuestos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/presupuestos">Presupueste Ahora</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2018-2019 Barrafranca S.A. de C.V. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <!-- Scripts --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-slim.min.js') }}"><\/script>')</script>
    <!-- <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/vendor/holder.min.js') }}"></script>

  </body>
</html>
