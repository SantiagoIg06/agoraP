<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"])or empty($_POST["apellido"])or empty($_POST["correo"])or empty($_POST["contraseña"])
    or empty($_POST["fecha_nacimiento"])) {
        echo 'uno de los campos esta vacio';
    } else {
        mysqli_query($conexion, "INSERT INTO usuario(nombre,apellido,correo,contraseña,fecha_nacimiento, idRol) 
        values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[correo]','$_REQUEST[contraseña]','$_REQUEST[fecha_nacimiento]',$_REQUEST[idRol])")
        or die("Problemas en el select" .
        mysqli_error($conexion));
        mysqli_close($conexion);
        header("location:http://localhost/agoraP-main/registrar.php");
    }
    
}
?>