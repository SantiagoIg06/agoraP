<?php


if (isset($_POST["rol"])) {
    // Obtiene los datos del formulario de registro
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $rol = $_POST["rol"];

    // Inserta los datos en la tabla de usuario
    mysqli_query($conexion, "INSERT INTO usuario (nombre, apellido, correo, contraseña, fecha_nacimiento, idRol) 
        VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$fecha_nacimiento', '$rol')")
        or die("Problemas en el insert: " . mysqli_error($conexion));
    
    // Cierra la conexión
    mysqli_close($conexion);
    
    // Redirige según el rol seleccionado
    if ($rol == 1) {
        header("location: registro_usuario.php"); // Redirige para registro de usuario
    } elseif ($rol == 2) {
        header("location: registro_empresa.php"); // Redirige para registro de empresa
    }
}
?>
