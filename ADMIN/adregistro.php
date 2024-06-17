<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registros</title>
    <link rel="stylesheet" href="./adregistro.css">
    
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
    <section>
        <div id="lat_izq" >
            <div class="img2">
                <a href="./admin.php">
                    <div class="divImg">
                        <img src="../imagenes/logosSimbolos/perfil.png" alt="">
                    </div>
                </a>
                <a class="nav_lg_sg2" href="./pPrincipal.php">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="button btn btn-link  ">Pagina principal</button>
                    </div>
                    </a>
                <a class="nav_lg_sg2" href="./publicaciones.php">
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="button btn btn-link  ">Publicaciones</button>
                </div>
                </a>
                <a class="nav_lg_sg2" href="./crearUsuario.php">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="button btn btn-link  ">Crear usuario</button>
                    </div>
                    </a>
                    <a class="nav_lg_sg2" href="./adregistro.php">
                        <div class="d-flex align-items-center">
                            <button data-mdb-ripple-init type="button" class="button btn btn-link  ">Registros</button>
                        </div>
                        </a>
            </div>
        </div>
        <div id="lat_der">
            <h1>Registros</h1>
            <?php
            include("../modelo/conexion.php");
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
      <th scope="col">Foto perfil</th>
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
                <td><?= $datos->foto_perfil ?></td>
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
        
    </section>
        


<footer id="foot">        
        
</footer>
<script src="../GENERAL/scriptGeneral.js"></script>
<script src="./generalAdmin.js"></script>
        
</body>
</html>