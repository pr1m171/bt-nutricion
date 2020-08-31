<?php
header('Content-Type: application/json');
include("conexion.php");


$apiKey = $_GET['api'];

$nombre = $_GET['nombre'];
$cedula = $_GET['cedula'];
$mail = $_GET['email'];
$fecha_nacimiento = $_GET['fecha_nacimiento'];
$pass = $_GET['pass'];
$genero = $_GET['genero'];
$estatura = $_GET['estatura'];
$peso = $_GET['peso'];

$fecha_ingreso = date('d/m/Y');

if($apiKey == "YIY1wZc7McIQcftgN9qz6OTENMtimAh7PBKhirPbf6BYoOK1sg1dTGFTOe9bP4"){


    $mysql = new conex_mysql();
    $mysql->conectar();
    $sql = "INSERT INTO clientes (nombre, identificacion, email, fecha_nacimiento, password, sexo, estatura, peso, fecha_ingreso) VALUES ('".$nombre."', '".$cedula."', '".$mail."', '".$fecha_nacimiento."', '".$pass."', '".$genero."', '".$estatura."', '".$peso."', '".$fecha_ingreso."')";
    $mysql_result = $mysql->consulta($sql);


    print ("true"); 

    $mysql->salir();


}

?>