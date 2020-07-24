<?php
	header('Content-Type: application/json');
	include("conexion.php");

	$id=$_GET['id'];
	$fecha=date("d/m/Y");

	$mysql = new conex_mysql();
    $mysql->conectar();
    $sql = "select * from agua where idUsuario='".$id."' and fecha='".$fecha."'";
    $mysql_result = $mysql->consulta($sql);

				
    $result = $mysql_result;
	$cantidadVasos = 0;

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$cantidadVasos++;
	  }
	}
	$mysql->salir();

	$vasos = $cantidadVasos * 250;


	/**CUANTA AGUA TENGO QUE TOMAR */

	$mysql = new conex_mysql();
    $mysql->conectar();
    $sql = "select * from clientes where id='".$id."'";
    $mysql_result = $mysql->consulta($sql);

				
    $result = $mysql_result;

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$agua = $row['agua'];
	  }
	}
	$mysql->salir();



	if($cantidadVasos == 0){
	   print ("false"); 
	}else{
		print('[{"agua":"'.$agua.'", "vasos":"'.$vasos.'"}]');
	}


?>