<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ADMIN/adminss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        
    </header>
    <section class="flex-container">
        <div class="grid-layout">
            <div class="caja c1">
                <div class="container-fluid">
                    <div class="row flex-nowrap">
                        <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between">
                            <div class="bg-dark p-2">
                                <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
                                    <span class="fs-4 d-none d-sm-inline">Menu</span>
                                </a>
                                <ul class="nav nav-pills flex-column mt-4 ">
                                    <li class="nav-item py-2 py-sm-0">
                                        <a href="./pPrincipal.php" class="nav-link text-white">
                                            <i class="fs-5 fa fa-house "></i><sanp class="fs-4 ms-3 d-none d-sm-inline">Principal</sanp>
                                        </a>
                                    </li>
                                    <li class="nav-item py-2 py-sm-0">
                                        <a href="./publicaciones.php" class="nav-link text-white">
                                            <i class="fs-5 fa fa-clipboard-check"></i><sanp class="fs-4 ms-3 d-none d-sm-inline">Publicaciones</sanp>
                                        </a>
                                    </li>
                                    <li class="nav-item py-2 py-sm-0">
                                        <a href="./crearUsuario.php" class="nav-link text-white">
                                            <i class="fs-5 fa fa-users"></i><sanp class="fs-4 ms-3 d-none d-sm-inline">Usuarios</sanp>
                                        </a>
                                    </li>
                                    <li class="nav-item py-2 py-sm-0">
                                        <a href="./adregistro.php" class="nav-link text-white">
                                            <i class="fs-5 fa fa-table-list"></i><sanp class="fs-4 ms-3 d-none d-sm-inline">Registros</sanp>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown open p-3">
                                <button
                                    class="btn border-none dropdown-toggle text-white"
                                    type="button"
                                    id="triggerId"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i class="fa fa-user"></i><sanp class="ms-2">usuario</sanp>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                    <button class="dropdown-item" href="#">Setting</button>
                                    <button class="dropdown-item disabled" href="#">
                                        Profile
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="caja c2">
            <div class="boton">
                <div id="openModal" class="modalDialog">
                    <div>
                        
                        <h2>Atecion al usuario</h2>
                        <div class="row mb-4">
                            <div class="mb-3">
                              <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example1">Nombre</label>
                                <input type="text" id="form3Example1" class="form-control" />
                              </div>
                            </div>
                            <div class="mb-3">
                              <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form3Example2">Correo Electronico</label>
                                <input type="email" id="form3Example2" class="form-control" bg-primary-border/>
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
            <div class="caja c3">
            <footer id="foot">
            <script src="../GENERAL/scriptGeneral.js"></script>
            <script src="./generalAdmin.js"></script>
            </footer>
            </div>
           
            
        </div>
    </section>
</body>
</html>