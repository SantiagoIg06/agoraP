<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="http://localhost/agoraP-main/ADMIN/admin.css">
</head>
<body>
    <header>
        <div class="img1">
            <img src="http://localhost/agoraP-main/imagenes/logosSimbolos/logo1.png" alt="">
        </div>
    </header>
    <section>
        <div id="lat_izq" >
            <div class="img2">
                <a href="http://localhost/agoraP-main/ADMIN/admin.php">
                    <div class="divImg">
                        <img src="http://localhost/agoraP-main/imagenes/logosSimbolos/perfil.png" alt="">
                    </div>
                </a>
                
                <a class="nav_lg_sg2" href="http://localhost/agoraP-main/ADMIN/pPrincipal.php">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Pagina principal</button>
                    </div>
                    </a>
                <a class="nav_lg_sg2" href="http://localhost/agoraP-main/ADMIN/publicaciones.php">
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Publicaciones</button>
                </div>
                </a>
                <a class="nav_lg_sg2" href="http://localhost/agoraP-main/ADMIN/crearcategoria.php">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Crear usuario</button>
                    </div>
                    </a>
                    <a class="nav_lg_sg2" href="http://localhost/agoraP-main/ADMIN/adregistro.php">
                        <div class="d-flex align-items-center">
                            <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Registros</button>
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
                            <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Enviar respuesta</button>
                          </div>
                    </div>
                </div>
            </div>
            
            <div class="persona">
                <img src="http://localhost/agoraP-main/imagenes/usadas/VaultBoy.webp" alt="">
            </div>

        </div>
    </section>
        


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