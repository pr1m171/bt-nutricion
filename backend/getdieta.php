<?php
header('Content-Type: application/json; charset=utf-8');

include("conexion.php");
include("tblAlimentos.php");
$apiKey = $_GET['api'];

if($apiKey == "YIY1wZc7McIQcftgN9qz6OTENMtimAh7PBKhirPbf6BYoOK1sg1dTGFTOe9bP4"){


    $mysql = new conex_mysql();
    $mysql->conectar();
    $sql = "select * from dieta where idPaciente='".$_GET['id']."' AND dia='" . $_GET['dia'] . "'";
    $mysql_result = $mysql->consulta($sql);

    $result = $mysql_result;

    $rows = array();
    $final = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rows['detalle'] = $row['detalle'];
            $rows['alimentos'] = getDetalle($row['id']);
            $rows['hora'] = $row['hora'];
            $rows['dia'] = $row['dia'];
            $rows['calorias'] = strval(totalCalorias($row['id']));
            $final[] = $rows;
            unset($rows);
        }
    }
    if(empty($final)){
       print ("false"); 
   }else{
        print json_encode($final,JSON_UNESCAPED_UNICODE);
   }

    

    $mysql->salir();


}

function getDetalle($id){
    $mysql = new conex_mysql();
    $mysql->conectar();
    $mysql_result = $mysql->consulta('select * from detalle where iddieta="' . $id . '"');
    $alimentos = "";

    $result = $mysql_result;

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $alimentos = getCampoAlimentos($row['idalimento'], 'nombre') . ", " . $alimentos;
        }
    }

    $mysql->salir();

    return $alimentos;
}

function totalCalorias($id){
    $mysql = new conex_mysql();
    $mysql->conectar();
    $mysql_result = $mysql->consulta('select * from detalle where iddieta="' . $id . '"');
    $calorias = "";

    $result = $mysql_result;

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $calorias = $calorias + getCampoAlimentos($row['idalimento'], 'calorias');
        }
    }

    $mysql->salir();

    return $calorias;
}
?>