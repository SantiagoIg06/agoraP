<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" DELETE FROM usuario where id=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Usuario Eliminado Correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error Al Eliminar</div>';
    }
    
}

?>