<?php
include("../crud/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$crud = new Crud();

if($_SERVER["REQUEST_METHOD"] === "POST")
{
$data = array();
//parsejson_decode_str(file_get_contents('php://input'),$data);
$data = json_decode(file_get_contents('php://input'),true);

//var_dump(json_decode(file_get_contents('php://input'), true));

$nombre = $data["nombre"];
$apellido = $data["apellido"];
$correo = $data["correo"];
$contraseña = $data["contraseña"];
$fecha_nacimiento = $data["fecha_nacimiento"];
$idRol = $data["idRol"];


$sql = "INSERT INTO usuario (nombre, apellido, correo, contraseña, fecha_nacimiento, idRol) VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$fecha_nacimiento', '$idRol')";
$res = $crud->create($sql);



if ($res)
{
	$result = array("status" => true , "message" => "Product Added Succefully...");
}
else
{
	$result = array("status" => false , "message" => "Something went wrong...");
}

echo json_encode($result);
}
else
{
	 $error = array("status" => 405 , "message" => 'Method not allowed...');

echo json_encode($error);
}
