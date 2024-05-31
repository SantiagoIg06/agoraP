<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Categoria</title>
    <link rel="stylesheet" href="./crearUsuario.css">
    
    </head>
<body>
    <header>
        <div class="img1">
            <img src="../imagenes/logosSimbolos/logo1.png" alt="">
        </div>
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
            <h1>Crea usuario</h1>
            
            <form class="form-general" method="POST" autocomplete="off">
            <?php
            include("../modelo/conexion.php");
            include("../controlador/contolador_crearUsuario.php");
            ?>
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
                
                
            </form>
        </div>
    </section>
        


<footer id="foot">        
        
</footer>
<script src="../scriptGeneral.js"></script>
        
</body>
</html>