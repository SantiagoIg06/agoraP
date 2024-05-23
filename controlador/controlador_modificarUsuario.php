<?php

if (!empty($_POST["modificar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["correo"]) && !empty($_POST["contraseña"]) && !empty($_POST["fecha_nacimiento"]) && !empty($_POST["idRol"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $correo=$_POST["correo"];
        $contraseña=$_POST["contraseña"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $idRol=$_POST["idRol"];
        $sql=$conexion->query(" UPDATE usuario set nombre='$nombre',apellido='$apellido',correo='$correo',contraseña='$contraseña',fecha_nacimiento='$fecha_nacimiento',idRol='$idRol' where id=$id ");
        if ($sql==1) {
            header("location:../ADMIN/adregistro.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR USUARIO</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">LOS CAMPOS ESTAN VACIOS</div>';
    }
}

?>