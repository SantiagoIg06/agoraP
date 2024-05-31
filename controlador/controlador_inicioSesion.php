<?php
if (!empty($_POST["login"])) {
    if (empty($_POST["correo"]) && empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $correo=$_POST["correo"];
        $clave=$_POST["contraseña"];
        $sql = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$clave'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            // Inicio de sesión exitoso, redirigir según el rol del usuario
            $usuario = $resultado->fetch_assoc();
            $idRol = $usuario['idRol'];
            
            switch ($idRol) {
                case 1:
                    // Redireccionar si el rol es Usuario
                    header("Location:../USUARIO/usuarioInf.php");
                    break;
                case 2:
                    // Redireccionar si el rol es Empresa
                    header("Location:../EMPRESA/perfilEmpresa.php");
                    break;
                case 3:
                    // Redireccionar si el rol es Admin
                    header("Location:../ADMIN/pPrincipal.php");
                    break;
                default:
                    // Redireccionar a una página por defecto si el rol no está definido
                    header("Location: ../pagina_por_defecto.php");
                    break;
            }
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
        
    }
    
}


?>