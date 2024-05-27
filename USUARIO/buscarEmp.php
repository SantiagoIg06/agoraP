<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./buscarEmp.css">
    <title>Empresas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <div>
          <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img
                    class="logos" src="../imagenes/logosSimbolos/logo1.png" alt="Logo"
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
                    class="logos" src="../imagenes/logosSimbolos/logo1.png" alt="Logo"
                    height="83"
                    width="100"
                    alt="./perfilEmpresa.php"
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
                      <a class="nav-link" href="./usuarioInf.php">Mi perfil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./buscarEmp.php">Busqueda de Ttrabajos</a>
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
        </div>
    </header>
    
    <section id="trabaj">
    <div class="header">
        <a href="./usuarioInf.php" style="text-decoration: none; font-size: 20px;">
        <img src="../imagenes/logosSimbolos/perfil.png" alt="Logo" style="padding-right: 10px;">XXXXXXXXXXXXXX </a>
    </div>
    <h2>Nuestros Trabajos</h2>
    <div class="filters">
        <button class="sleccion">
            <span class="label">Ubicación:</span>
            <select class="selectUbic">
              <option value="">Selecciona una ubicación</option>
              <option value="location1">Ubicación 1</option>
              <option value="location2">Ubicación 2</option>
              <option value="location3">Ubicación 3</option>
            </select>
            <span class="arrow">&#8595;</span>
          </button>
          <button class="sleccion">
            <span class="label">Programa:</span>
            <select class="selectUbic">
              <option value="">Selecciona una ubicación</option>
              <option value="location1">Programa 1</option>
              <option value="location2">Programa 2</option> 
              <option value="location3">Programa 3</option>
            </select>
            <span class="arrow">&#8595;</span>
          </button>
    </div>
    

    <ul id="work-list">
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
    </ul>
    <!-- Add more works here -->
    <ul id="work-list">
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      </ul>
    <ul id="work-list">
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      <a href="./infEmp.php" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      <a href="./infEmp.html" style="text-decoration: none; color: black;">
        <li>
          <div class="work-info">
              <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
            <h3>Empresa XYZ</h3>
            <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
          </div> 
          <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
        </li>
      </a>
      </ul>
      <ul id="work-list">
        <a href="./infEmp.php" style="text-decoration: none; color: black;">
          <li>
            <div class="work-info">
                <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
              <h3>Empresa XYZ</h3>
              <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
            </div> 
            <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
          </li>
        </a>
        <a href="./infEmp.php" style="text-decoration: none; color: black;">
          <li>
            <div class="work-info">
                <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
              <h3>Empresa XYZ</h3>
              <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
            </div> 
            <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
          </li>
        </a>
        <a href="./infEmp.php" style="text-decoration: none; color: black;">
          <li>
            <div class="work-info">
                <img class="imgEmp" src="../imagenes/usadas/Trabajos.jpg" alt="Empresas">
              <h3>Empresa XYZ</h3>
              <p>Necesitamos un desarrollador web para nuestro sitio web corporativo.</p>
            </div> 
              <a href="./contact.php"><button class="chat-button">Contactanos</button></a>
            </li>
        </a>
      </ul>
  </section>
</div>
    
      <footer>
        Se tomo inspiracion de la pagina computrabajo.com
        <br>
        <div class="pie">
        copyright@sena
        </div>
        No le pagamos a la empresa de fallout por su imagen
    </footer>
</body>
</html>