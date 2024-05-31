<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./styleRusu.css">
    <title>Registrar</title>


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
                      <a href="../index.php">
                          <img class="logos" src="../imagenes/logosSimbolos/logo1.png" alt="Logo">
                      </a>
                    </div> 
                    <form action="./registrar.php" method="POST" autocomplete="off" onsubmit="return validate ()" >
                      <?php
                      include("../modelo/conexion.php");
                      include("../controlador/controlador_registro.php");
                      ?>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                          <div class="col">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" name="nombre" id="form3Example1" class="form-input" placeholder="Nombre" required/>
                            </div>
                          </div>
                          <div class="col">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" name="apellido" id="form3Example2" class="form-input" placeholder="Apellido" required/>
                            </div>
                          </div>
                        </div>
                      
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="email" name="correo" id="form3Example3" class="form-input" placeholder="Correo Electronico" required/>
                        </div>
                      
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" name="contraseña" id="form3Example4" class="form-input" placeholder="Contraseña" required/>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="fecha_nacimiento" id="form3Example5" class="form-input" placeholder="Fecha de nacimiento" onfocus="showPlaceholder(this)" click="checkInput(this)" required/>
                        </div>
                        
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit" value="siguiente"  class="btn btn-primary btn-block mb-4">Sign up</button>
                      
                        <!-- Register buttons -->
                        <div class="text-center">
                          <p>o inicia sesion con:</p>
                      
                          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                          </button>
                      
                          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                          </button>
                          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                          </button>
                          <div>
                            <p class="log mb-2">¿Ya tienes una cuenta? <a href="./iniciarsesion.php" class="text-white-50 fw-bold">Inicia sesion</a>
                            </p>
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
<script src="../GENERAL/scriptGeneral.js"></script>
<script src="./registerU.js"></script>

</body>
</html>

