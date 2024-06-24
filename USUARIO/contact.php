<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./contact.css">
    <script src="../GENERAL/scriptGeneral.js"></script>
    <title>Empresas</title>

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
                        alt="/EMPRESA/perfilEmpresa.php"
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
                        alt="/EMPRESA/perfilEmpresa.php"
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
    
    <section>
        <div class="cont_P">
        <div class="header">
        <a href="./usuarioInf.php" style="text-decoration: none; font-size: 20px;">
        <img src="../imagenes/logosSimbolos/perfil.png" alt="Logo" style="padding-right: 10px;">XXXXXXXXXXXXXX </a>
    </div>
            <div class="infEmp">
                
                    <div class="cont_s1">
                        <img src="../imagenes/usadas/Trabajos.jpg" alt="imgTrabajos" class="imgTrbj">
                    </div>
                        <div class="cont_s2">
                            <div class="tittles">
                                <h2 class="titulos1">Empresa XYZ <br>Informacion de contacto</h2>
                            </div>
                            <br>
                        <div class="informacionEmp">
                                <p>DIRECCION: XXXXXXXXXXXXXXXXXXXX <br></p>
                                <p>TELEFONO: XXXXXXXXXXXXXX <br></p>
                                <p>CORREO: XXXXXXXXXXXXXXXXXXXX <br></p>
                                <p>CARGO A REALIZAR: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quibusdam, animi eos facilis aut nihil eveniet laborum velit veniam rem nesciunt magnam cum perspiciatis iusto, numquam molestiae dolor maxime modi?
                                Nisi fugiat beatae dignissimos modi. Repellat commodi exercitationem tempore alias sunt eum sequi officia placeat enim laudantium? Amet fuga obcaecati laudantium quis qui, eum cumque hic molestiae totam sint incidunt?
                                Exercitationem cum architecto hic. Laborum, dolore in iste blanditiis deleniti quae placeat ut sapiente corrupti excepturi aliquid eveniet voluptate nulla beatae aperiam nam magnam reiciendis quidem esse commodi! Qui, repudiandae!
                                Quis soluta nulla fugiat quo exercitationem est. Fuga unde esse ut beatae omnis qui, velit odio cumque reprehenderit facilis minima repudiandae sunt eligendi officia rem consequuntur voluptate et odit nesciunt.
                                Nisi asperiores repudiandae reprehenderit eum aperiam tempore qui inventore rerum velit repellendus, adipisci et assumenda excepturi atque sit ipsum quidem ratione eligendi eos nesciunt, enim odio aliquid voluptate quod! Aspernatur.</p>
                        </div> 
                        <div class="buttonS">
                            <a href="./infEmp.php" class="button_contact2">Ver mas</a>
                        </div>
                        </div>
            </div>
            <div>
                <img class="separadorLinea" src="../imagenes/usadas/separadorlinea.png"alt="lineaSeparador">
            </div>
                
        </div>
        
        <div class="buttonP">
            <a href="https://wa.me/" class="button_contact"><img class="imgWhat" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png">Contacto</a>
        </div> 
    </section>
    <br>

    
<footer id="foot">        
        
</footer>
</body>
</html>