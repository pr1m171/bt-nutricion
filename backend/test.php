<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("conexion.php");


$mysql = new conex_mysql();
$mysql->conectar();
$mysql_result = $mysql->consulta('INSERT INTO turnos ("pacienteid", "fecha", "hora", "medicoid") VALUES ("'.$_POST['usuario'].'", "'.$_POST['fecha'].'", "'.$_POST['hora'].'", "'.$nutricionista.'")');



?>