<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Categoria</title>
    <link rel="stylesheet" href="./crearUsuarios.css">
    
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
                <h1>Crea usuario</h1>
            
            <form class="form-general" method="POST" autocomplete="off">
            <?php
            include("../modelo/conexionREG.php");
            include("../controlador/contolador_crearUsuario.php");
            ?>
            <div class="table">
                <div class="col-4 p-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Rol</label>
                            <select class="form-select" name="idRol" aria-label="Default select example">
                                <option value="1">Usuario</option>
                                <option value="2">Empresa</option>
                                <option value="3">Admin</option>
                            </select>
                    </div>
                
                    <button type="submit" name="btnregistrar" value="registrar" class="btn btn-primary">Crear</button>
                </div>
            </div class="table">
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