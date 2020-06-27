<?php
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

    print json_encode($rows);

    $mysql->salir();


}

?>