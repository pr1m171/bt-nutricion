<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
header('Content-Type: application/json');
include("conexion.php");
$mail = $_GET['email'];
$apiKey = $_GET['api'];

if($apiKey == "YIY1wZc7McIQcftgN9qz6OTENMtimAh7PBKhirPbf6BYoOK1sg1dTGFTOe9bP4"){


    $mysql = new conex_mysql();
    $mysql->conectar();
    $sql = "SELECT * FROM clientes WHERE email='".$mail."'";
    $mysql_result = $mysql->consulta($sql);

    $result = $mysql_result;

    $rows = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    if(empty($rows)){
       print ("false"); 
   }else{
        print json_encode($rows);
   }

    

    $mysql->salir();


}

?>