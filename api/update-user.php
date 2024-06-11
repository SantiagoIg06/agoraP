<?php
include("../crud/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json");

$crud = new Crud();


if($_SERVER["REQUEST_METHOD"] === "PUT")
{

$data = array();
//parsejson_decode_str(file_get_contents('php://input'),$data);
$data = json_decode(file_get_contents('php://input'),true);


$id = $data["id"];
$nombre = $data["nombre"];
$apellido = $data["apellido"];
$correo = $data["correo"];
$contraseña = $data["contraseña"];
$fecha_nacimiento = $data["fecha_nacimiento"];
$idRol = $data["idRol"];

$sql = "update usuario set nombre='$nombre',apellido='$apellido',correo='$correo',contraseña='$contraseña',fecha_nacimiento='$fecha_nacimiento',idRol='$idRol' where id=".$_GET['id'];
$res = $crud->update($sql);


if ($res)
{
	$result = array("status" => true , "message" => "Product Updated Succefully...");
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