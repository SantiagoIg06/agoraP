<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoria</title>
    <link rel="stylesheet" href="http://localhost/agoraP-main/ADMIN/crearcategoria.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            <h1>Crea usuario</h1>
            
            <form class="col-4 p-3" method="POST">
            <?php
            include("../modelo/conexion.php");
            include("../controlador/contolador_crearUsuario.php");
            ?>
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
            </form>
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