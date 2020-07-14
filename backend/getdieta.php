<?php
header('Content-Type: application/json; charset=utf-8');

include("conexion.php");
include("tblAlimentos.php");
$apiKey = $_GET['api'];

if($apiKey == "YIY1wZc7McIQcftgN9qz6OTENMtimAh7PBKhirPbf6BYoOK1sg1dTGFTOe9bP4"){


    $mysql = new conex_mysql();
    $mysql->conectar();
    $sql = "select * from dieta where idPaciente='".$_GET['id']."' AND dia='" . $_GET['dia'] . "' order by STR_TO_DATE(hora,'%H:%i')";
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
       print ('[{"detalle":"DESAYUNO","alimentos":"","hora":"08:00","dia":"'.$_GET['dia'].'","calorias":"0"},{"detalle":"COMIDA","alimentos":"","hora":"10:00","dia":"'.$_GET['dia'].'","calorias":"0"},{"detalle":"ALMUERZO","alimentos":"","hora":"13:00","dia":"'.$_GET['dia'].'","calorias":"0"},{"detalle":"MERIENDA","alimentos":"","hora":"17:00","dia":"'.$_GET['dia'].'","calorias":"0"},{"detalle":"CENA","alimentos":"","hora":"22:00","dia":"'.$_GET['dia'].'","calorias":"0"}]'); 
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

    $cantidad = $result->num_rows;
    $sum = 0;

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $sum++;
            if($sum == $cantidad){
                $alimentos = $alimentos . getCampoAlimentos($row['idalimento'], 'nombre');
            }else{
                $alimentos = getCampoAlimentos($row['idalimento'], 'nombre') . ", " . $alimentos;
            }
            
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