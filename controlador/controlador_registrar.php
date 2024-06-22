<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["correo"]) or empty($_POST["contraseña"])
        or empty($_POST["fecha_nacimiento"])) {
        echo 'Uno de los campos está vacío';
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $idRol = $_POST["idRol"];

        mysqli_query($conexion, "INSERT INTO usuario(nombre,apellido,correo,contraseña,fecha_nacimiento, idRol) 
        values ('$nombre','$apellido','$correo','$contraseña','$fecha_nacimiento',$idRol)")
        or die("Problemas en el select" .
        mysqli_error($conexion));
        mysqli_close($conexion);
        header("Location: /registrar.php");
        exit;
    }
}
?>
