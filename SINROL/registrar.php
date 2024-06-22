<!DOCTYPE html>
<html lang="es">
<head>

    <title>Agora registrar</title>
    <link rel="stylesheet" href="./styleRegistrar.css">

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
                      <a href="./index.php">
                          <img class="logos" src="./imagenes/logosSimbolos/logo2.png" alt="Logo">
                      </a>
                    </div> 
                    <form action="../controlador/controlador_registro.php" method="POST">
                    <?php
                      include("./modelo/conexion.php");
                      include("./controlador/controlador_registro.php");
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
                                      <img class="separadorLinea" src=". /imagenes/usadas/separadorlinea.png" alt="Linea separador">
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


<footer id="foot">        
        
</footer>
<script src="./GENERAL/scriptGeneral.js"></script>

</body>
</html>