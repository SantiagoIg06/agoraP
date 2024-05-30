<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilosemp/datosEmp.css">
    <title>Registrar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
                      <a href="./index.html">
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