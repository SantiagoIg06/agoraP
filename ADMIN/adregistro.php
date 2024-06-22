<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registros</title>
    <link rel="stylesheet" href="./adregistros.css">
    
</head>
<body>
    <script>
        function eliminar() {
            var respuesta=confirm("Estas seguro que deseas ELIMINAR?")
            return respuesta
        }

    </script>
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
            <h1>Registros</h1>
            <?php
            include("../modelo/conexionREG.php");
            include("../controlador/controlador_eliminarUsuario.php");
            ?>
            <table class="table">
  <thead class="table-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">contraseña</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Rol</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
        <?php
        $sql=$conexion->query("SELECT * From usuario");
        while ($datos=$sql->fetch_object()) { ?>
            <tr>
                
                <td><?= $datos->id ?></td>
                <td><?= $datos->nombre ?></td>
                <td><?= $datos->apellido ?></td>
                <td><?= $datos->correo ?></td>
                <td><?= $datos->contraseña ?></td>
                <td><?= $datos->fecha_nacimiento ?></td>
                <td><?= $datos->idRol ?></td>
                <td>
                     <a href="modificar_usuario.php?id=<?= $datos->id ?>" class="btn btn small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a onclick="return eliminar()" href="adregistro.php?id=<?= $datos->id ?>" class="btn btn small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        <?php }
        ?>
    
   
  </tbody>
</table>
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