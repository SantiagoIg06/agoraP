<html>
<html>
<head>
<title>Conexion en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost",
"root", "", "agora2") or die("Problemas con la conexión");
mysqli_query($conexion, "insert into usuario(nombre,apellido,correo,contraseña,fecha_nacimiento) 
values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[correo]','$_REQUEST[contraseña]','$_REQUEST[fecha_nacimiento]')")
or die("Problemas en el select" .
mysqli_error($conexion));
mysqli_close($conexion);
echo  "El Usuario fue Ingresado al Curso
Seleccionado ";
?>
</body>
</html>
