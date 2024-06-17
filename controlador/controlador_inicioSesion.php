<?php
session_start();
if (!empty($_POST["login"])) {
    if (empty($_POST["correo"]) || empty($_POST["contraseña"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $correo = $_POST["correo"];
        $clave = $_POST["contraseña"];
        // Considera usar consultas preparadas para mayor seguridad

        // Tu código de conexión y consulta SQL aquí
        $sql = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$clave'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();

            // Iniciar sesión y almacenar datos en variables de sesión
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['apellido'] = $usuario['apellido'];
            $_SESSION['correo'] = $usuario['correo'];
            $_SESSION['foto_perfil'] = $usuario['foto_perfil'];
            $_SESSION['idRol'] = $usuario['idRol'];

            // Redirigir según el rol del usuario
            switch ($_SESSION['idRol']) {
                case 1:
                    header("Location:../USUARIO/usuarioInf.php");
                    exit();
                case 2:
                    header("Location:../EMPRESA/perfilEmpresa.php");
                    exit();
                case 3:
                    header("Location:../ADMIN/pPrincipal.php");
                    exit();
                default:
                    header("Location: ../pagina_por_defecto.php");
                    exit();
            }
        } else {
            echo '<div class="alert alert-danger">Acceso denegado</div>';
        }
    }
}
?>
