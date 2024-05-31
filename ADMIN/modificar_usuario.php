<?php
include("../modelo/conexion.php");
$id=$_GET["id"];
$sql=$conexion->query(" SELECT * From usuario Where id=$id ");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../styleRusu.css">
    <title>Modificar Usuarior</title>
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
                      <a>
                          <img class="logos" src="../imagenes/logosSimbolos/logo1.png" alt="Logo">
                      </a>
                    </div> 

                    <form method="POST" >
                      
                    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                      <?php
                      include("../controlador/controlador_modificarUsuario.php");
                      while ($datos=$sql->fetch_object()) { ?>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                          <div class="col">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" name="nombre" value="<?= $datos->nombre ?>"  class="form-control" placeholder="Nombre" />
                            </div>
                          </div>
                          <div class="col">
                            <div data-mdb-input-init class="form-outline">
                              <input type="text" name="apellido" value="<?= $datos->apellido ?>"  class="form-control" placeholder="Apellido" />
                            </div>
                          </div>
                        </div>
                      
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="email" name="correo" value="<?= $datos->correo ?>"  class="form-control" placeholder="Correo" />
                        </div>
                      
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" name="contraseña" value="<?= $datos->contraseña ?>"  class="form-control" placeholder="Contraseña" />
                        </div>
                        <!-- date input -->

                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="date" name="fecha_nacimiento" value="<?= $datos->fecha_nacimiento ?>"  class="form-control" placeholder="Fecha_nacimiento"/>
                        </div>
                        <!-- id input -->
                        <p style="background-color:#000;color:#fff;border-radius:5px;width:100%;text-align:center;">Roles</p>
                        <div data-mdb-input-init class="form-outline mb-4 roles">
                        <select name="idRol" value="<?= $datos->idRol ?>" class="form-control" placeholder="Rol">
                          <option value="1" <?= ($datos->idRol == 1) ? 'selected' : ''?>>Usuario</option>
                          <option value="2" <?= ($datos->idRol == 2) ? 'selected' : ''?>>Empresa</option>
                          <option value="3" <?= ($datos->idRol == 3) ? 'selected' : ''?>>Administrador</option>
                          </select>
                        </div>
                        
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit" value="registrar" name="modificar" class="btn btn-primary btn-block mb-4">Modificar Usuario</button>
                      <?php }
                      ?>
                        
                      
                        
                        
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