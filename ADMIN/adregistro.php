<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="adregistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9b84afdaf2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="img1">
            <img src="imagenes/logosSimbolos/logo1.png" alt="">
        </div>
    </header>
    <section >
        <div id="lat_izq" >
            <div class="img2">
                <a href="/ADMIN/admin.html">
                    <div class="divImg">
                        <img src="imagenes/logosSimbolos/perfil.png" alt="">
                    </div>
                </a>
                <a class="nav_lg_sg2" href="/ADMIN/pPrincipal.html">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Pagina principal</button>
                    </div>
                    </a>
                <a class="nav_lg_sg2" href="publicaciones.html">
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Publicaciones</button>
                </div>
                </a>
                <a class="nav_lg_sg2" href="crearcategoria.html">
                    <div class="d-flex align-items-center">
                        <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Crear categoria</button>
                    </div>
                    </a>
                    <a class="nav_lg_sg2" href="adregistro.html">
                        <div class="d-flex align-items-center">
                            <button data-mdb-ripple-init type="button" class="button btn btn-link px-3 me-3">Registros</button>
                        </div>
                        </a>
            </div>
        </div>
        <div>
            <h1>Registros</h1>
        </div>
        <div class="cuest" style="display: flex;">
            <table class="table">
                <thead class="bg-info" >
                  <tr>
                    <th scope="col"> Id </th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    include "../modelo/conexionREG.php";
                    $sql=$conexion->query(" select * from usuario ");
                    while($datos=$sql->fetch_object()) { ?>
                <tr>
                    <td> <?= $datos->id ?> </td>
                    <td> <?= $datos->nombre ?> </td>
                    <td> <?= $datos->apellido ?> </td>
                    <td> <?= $datos->correo ?> </td>
                    <td> <?= $datos->contraseña ?> </td>
                    <td> <?= $datos->fecha_nacimiento ?> </td>
                    <td>
                        <a href="#"><i class="btn btn-small btn-warning fa-solid fa-pen-to-square"></i></a>
                        <a href="#"><i class="btn btn-small btn-danger fa-solid fa-trash"></i></a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>      
</body>
</html>