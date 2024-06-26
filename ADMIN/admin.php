<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <header>
        
    </header>
    <section>
    <div id="lat_izq" >
            <div class="img2">
                <a href="./admin.php" class="nav_lg_sg2">
                    <div class="divImg d-flex">
                        <img src="../imagenes/logosSimbolos/perfil.png" alt="">
                    </div>
                </a>
                <a class="nav_lg_sg2" href="./pPrincipal.php">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="btnLateral button btn btn-link  ">Pagina principal</button>
                    </div>
                    </a>
                <a class="nav_lg_sg2" href="./publicaciones.php">
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="btnLateral button btn btn-link  ">Publicaciones</button>
                </div>
                </a>
                <a class="nav_lg_sg2" href="./crearUsuario.php">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="btnLateral button btn btn-link  ">Crear usuario</button>
                    </div>
                    </a>
                    <a class="nav_lg_sg2" href="./adregistro.php">
                        <div class="d-flex align-items-center">
                            <button data-mdb-ripple-init type="button" class="btnLateral button btn btn-link  ">Registros</button>
                        </div>
                        </a>
            </div>
        </div>
        <div id="lat_der">
            <h1>Estamos aqui para ti</h1>
            <div class="texto">
                <p class="parrafo">Nuestra prioridad es que estes conforme con nuestra pagina
                    web junto con el servicio que te estamos ofreciendo, Es por
                    eso que si se te presento algun problema e inquietud o si
                    tienes alguna idea la cual ayude a mejorar la pagina habla con
                    nuestro asesor dando click en el boton</p>
            </div>
            <div class="boton">
                <button><a href="#openModal">Estamos aqui para ti </a></button>
                <div id="openModal" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <h2>Atecion al usuario</h2>
                        <div class="row mb-4">
                            <div class="col">
                              <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example1">Nombre</label>
                                <input type="text" id="form3Example1" class="form-control" />
                              </div>
                            </div>
                            <div class="col">
                              <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example2">Correo Electronico</label>
                                <input type="text" id="form3Example2" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Cuentanos sobre tu problema</label>
                            <input type="email" id="form3Example3" class="form-control" />
                            <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4 btn-modal">Enviar respuesta</button>
                          </div>
                    </div>
                </div>
            </div>
            
            <div class="persona">
                <img src="../imagenes/usadas/VaultBoy.webp" alt="">
            </div>

        </div>
    </section>
        


<footer id="foot">        
        
</footer>
<script src="../GENERAL/scriptGeneral.js"></script>
<script src="./generalAdmin.js"></script>
        
</body>
</html>