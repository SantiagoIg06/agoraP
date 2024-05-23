<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["correo"]) && !empty($_POST["contraseña"]) && !empty($_POST["fecha_nacimiento"]) && !empty($_POST["idRol"])) {
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $correo=$_POST["correo"];
        $contraseña=$_POST["contraseña"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $rol = $_POST["idRol"];
        
        $sql=$conexion->query("INSERT INTO usuario (nombre, apellido, correo, contraseña, fecha_nacimiento, idRol) VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$fecha_nacimiento', '$rol')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR!</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">LOS CAMPOS ESTAN VACIOS</div>';
    }
    
}
?>