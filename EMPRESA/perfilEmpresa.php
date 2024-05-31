<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perfil Empresa</title>
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
        <h1>Nombre Empresa</h1>
        <h2>direccion Empresa</h2>
        <h2>correo electronico de la Empresa</h2>
        <h2>numero de contacto</h2>
        <h2>trabajos que ofrece la Empresa</h2>
        <a href="./actualizarPerfilEmp.php">
          <button type="button"class="btn btn-primary btn-lg" >Actualizar Perfil</button>
        </a>
      </div>
    </section>

    <footer id="foot">        
        
        </footer>
        <script src="../GENERAL/scriptGeneral.js"></script>

</body>
</html>