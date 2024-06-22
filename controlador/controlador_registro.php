<?php
$conexion=new mysqli ("localhost","root","","agoraP");
if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["correo"]) && !empty($_POST["contraseña"]) && !empty($_POST["fecha_nacimiento"]) && !empty($_POST["rol"])) {
   
    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $rol = $_POST["rol"];
    
    $query = "INSERT INTO usuario (nombre, apellido, correo, contraseña, fecha_nacimiento, idRol) VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$fecha_nacimiento', '$rol')";
    $resultado = mysqli_query($conexion, $query);
    
    if ($resultado) {
        if ($rol == 1) {
            header("location: ../USUARIO/usuarioInf.php"); // Redirige para registro de usuario
        } elseif ($rol == 2) {
            header("location:  ../EMPRESA/perfilEmpresa.php"); // Redirige para registro de empresa
        }
    } else {
        echo 'Error al registrar el usuario: ' . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
}


?>

