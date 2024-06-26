<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styleRusu.css">
    <script src="../GENERAL/scriptGeneral.js"></script>
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
                          <img class="logos" src="../imagenes/logosSimbolos/logo1.png" alt="Logo">
                      </a>
                    </div> 
                    <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                          <div class="col">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" id="form3Example1" class="form-control" />
                              <label class="form-label" for="form3Example1">First name</label>
                            </div>
                          </div>
                          <div class="col">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" id="form3Example2" class="form-control" />
                              <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                          </div>
                        </div>
                      
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="email" id="form3Example3" class="form-control" />
                          <label class="form-label" for="form3Example3">Email address</label>
                        </div>
                      
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" id="form3Example4" class="form-control" />
                          <label class="form-label" for="form3Example4">Password</label>
                        </div>
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign up</button>
                      
                        <!-- Register buttons -->
                        <div class="text-center">
                          <p>or sign up with:</p>
                          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                          </button>
                      
                          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                          </button>
                      
                          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                          </button>
                      
                          <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                          </button>
                          <div>
                            <p class="log mb-2">have a account? <a href="/iniciarsesion.html" class="text-white-50 fw-bold">Login</a>
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
</body>
</html>