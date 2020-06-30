<?php

include("conexion.php");

    $mysql = new conex_mysql();
    $mysql->conectar();
    $sql = "SELECT * FROM alimentos WHERE id='".$_GET['id']."'";
    $mysql_result = $mysql->consulta($sql);

    $result = $mysql_result;

    $rows = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row['nombre'] . "/?" . $row['calorias'] . "/?" .$row['hidratos'] . "/?" .$row['proteinas'] . "/?" .$row['grasas'] . "/?" .$row['fibras'] . "/?" .$row['id'];
        }
    }

    

    $mysql->salir();




?>