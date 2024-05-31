<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./estilosemp/datosEmp.css">
    <title>Registrar</title>
    
</head>
<body>


    <section class="registrar vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-black" style="border-radius: 1rem;">
                <div class="contP card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="contentImg">
                      <a href="./index.php">
                          <img class="logos" src="./imagenes/logosSimbolos/logo1.png" alt="Logo">
                      </a>
                    </div> 
                    <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">Nombre de la empresa</label>
                        </div>
                        <!-- Number input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="number" id="form3Example3" class="form-control" />
                            <label class="form-label" for="form3Example3">Numero de contacto</label>
                          </div>
                        
                      
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="text" id="form3Example4" class="form-control" />
                          <label class="form-label" for="form3Example4">Direccion de la empresa</label>
                        </div>
                        <!-- Submit button -->
                        <a href="./perfilEmpresa.php"><button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Siguiente</button></a>
                        
                      
                      
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
<script src="../scriptGeneral.js"></script>
</body>
</html>