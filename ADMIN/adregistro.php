<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="http://localhost/agoraP-main/ADMIN/adregistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5f71ff408d.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar() {
            var respuesta=confirm("Estas seguro que deseas ELIMINAR?")
            return respuesta
        }

    </script>
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