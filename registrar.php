<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agora registrar</title>
    <link rel="stylesheet" href="./styleRegistrar.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <section class="registrar gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-black" style="border-radius: 1rem;">
                <div class="contP card-body p-5 text-center">
      
                  <div class="content-edit">
                    <div class="contentImg">
                      <a href="./index.html">
                          <img class="logos" src="./imagenes/logosSimbolos/logo2.png" alt="Logo">
                      </a>
                    </div> 
                    <form action="controlador/controlador_registro.php" method="POST">
                    <?php
                      include("modelo/conexion.php");
                      include("controlador/controlador_registro.php");
                      ?>
                    <input type="hidden" name="nombre" value="<?php echo $_POST["nombre"]; ?>">
                    <input type="hidden" name="apellido" value="<?php echo $_POST["apellido"]; ?>">
                    <input type="hidden" name="correo" value="<?php echo $_POST["correo"]; ?>">
                    <input type="hidden" name="contraseña" value="<?php echo $_POST["contraseña"]; ?>">
                    <input type="hidden" name="fecha_nacimiento" value="<?php echo $_POST["fecha_nacimiento"]; ?>">

        
        
                      <div class="contentP">
                          <h2>¡Cuéntanos!</h2>
                          <br>
                          <button type="submit" name="rol" value="1" class="btn btn-outline-light">¿Buscas empleo?</button>
                                  <br><br>
                                  <div>
                                      <img class="separadorLinea" src="./imagenes/usadas/separadorlinea.png" alt="Linea separador">
                                  </div>
                                  <button type="submit" name="rol" value="2" class="btn btn-outline-light">¿Buscas personal?</button>
                                  <br>
                          <div>
                              <br>
                              <h5>¿Ya tienes cuenta?</h5>
                              <br>
                              <button data-mdb-ripple-init type="button" class="btn_iniciar btn btn-primary me-3">
                                  <a class="btnSesion nav_lg_sg" href="./iniciarsesion.php">Iniciar sesion</a>
                              </button>
                              <br><br>
                          </div>
                      </div>
        
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
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