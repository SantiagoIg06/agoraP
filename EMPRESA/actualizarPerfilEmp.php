<!DOCTYPE html>
<html lang="en">
<head>
    <title>Actualizar Perfil Empresa</title>
    <link rel="stylesheet" href="./estilosemp/styleEmpPer.css">
</head>
<body>
  <header class="menu">
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
              class="logos" src="./imagenes/logo1.png" alt="Logo"
              height="83"
              width="100"
              alt="/perfilEmpresa.html"
              loading="lazy"
              style="margin-top: -1px;">
              
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
              <img
              class="logos" src="./imagenes/logo1.png" alt="Logo"
              height="83"
              width="100"
              alt="./perfilEmpresa.html"
              loading="lazy"
              style="margin-top: -1px;">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./perfilEmpresa.php">Mi perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./solicitudesPostulantes.php">Busqueda de postulantes</a>
              </li>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>      
</header>

    <section class="flex-container">
      <div class="caja">
        <img class="imagenPerfilEmp" src="./imagenes/istockphoto-1300845620-612x612.jpg" alt="foto usuario">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Nombre Empresa</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Direccion Empresa</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Numero contacto</label>
        </div>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Trabajos Que Ofrece La Empresa</label>
        </div>
        
        <button type="button" class="btn btn-primary btn-lg">Actualizar Perfil</button>
      </div>
    </section>

<footer id="foot">        
        
</footer>
<script src="../scriptGeneral.js"></script>
</body>
</html>