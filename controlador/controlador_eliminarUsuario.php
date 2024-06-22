<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    $sql_update_empresa = $conexion->query("UPDATE empresa SET idUsu = NULL WHERE idUsu = $id");

    $sql_update_postulacion = $conexion->query("UPDATE postulacion SET idUsu = NULL WHERE idUsu = $id");

    $sql_delete_usuario = $conexion->query("DELETE FROM usuario WHERE id = $id");

    if ($sql_delete_usuario === true) {
        echo '<div class="alert alert-success">Usuario eliminado correctamente.</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar el usuario.</div>';
    }
}
?>
