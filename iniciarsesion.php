<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./styleSesion.css">

</head>
<body>
    
    <section class="iniciarSesion gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-black" style="border-radius: 1rem;">
                <div class="cont_logs card-body p-5 text-center">
      
                  <div class="content-edit">
                    <div class="contentImg">
                      <a href="./index.php">
                          <img class="logos" src="./imagenes/logosSimbolos/logo1.png" alt="Logo">
                      </a>
                  </div>
                    <p class="text-black-50 mb-5">Por favor digita tu correo y contraseña!</p>
                    <form action="" method="POST" autocomplete="off">
                      <?php
                      include("modelo/conexion.php");
                      include("controlador/controlador_inicioSesion.php");
                      ?>
                    <div class="form-outline form-black mb-4">
                      <input type="email" class="logs" id="typeEmailX" name="correo" placeholder="Correo"/>
                    </div>
      
                    <div class="form-outline form-black mb-4">
                      <input type="password" class="logs" id="typePasswordX" name="contraseña" placeholder="Contraseña"/>
                    </div>
      
                    <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">¿Olvidaste tu contraseña?</a></p>
      
                    <button name="login" class="btn_log" type="submit" value="INICIAR SESION">Iniciar</button>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-black"><i class="fab fa-google fa-lg"></i></a>
                      <a href="#!" class="text-black"><i class="fab fa-github fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-black"><i class="fab fa-facebook-f fa-lg"></i></a>
                    </div>
      
                    </form>
                    
                  </div>
      
                  <div>
                    <p class="mb-0">¿No tiene una cuenta? <a href="./registerU.php" class="text-black-50 fw-bold">Registrate</a>
                    </p>
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