<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid m-2">
            <img src="{{ asset('img/logo.png') }}" alt="Ejemplo de imagen" width="75">
            <p class="navbar-brand me-auto text-white ps-3">DeportesLDR</p>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Administrador
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <div class="ps-5"></div>
                    <div class="ps-5"></div>
                </ul>
            </div>
        </div>
    </nav>
    </header>
<main class="contenido">
    @yield('contenido')
</main>
<footer class="bg-success text-light py-1 fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>&copy;Manuel Baeza Romero</p>
      </div>
    </div>
  </div>
</footer>
  
  
</body>
</html>