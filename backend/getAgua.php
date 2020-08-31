<?php
	header('Content-Type: application/json');
	date_default_timezone_set('America/Bogota');
	include("conexion.php");

	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);

	$id=$_GET['id'];
	$fecha=date("d/m/Y");
	$hora=date("H:i");
	$accion = $_GET['accion'];

	if($accion == 'ver'){
		$mysql = new conex_mysql();
	    $mysql->conectar();
	    
	    $sql = "SELECT * FROM agua WHERE idUsuario='".$id."' AND fecha='".$fecha."'";
	    $mysql_result = $mysql->consulta($sql);

					
	    $result = $mysql_result;
		$cantidadVasos = 0;

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		  	$cantidadVasos++;
		  	$hora = $row['hora'];
		  }
		}
		$mysql->salir();

		$vasos = $cantidadVasos * 250;


		$mysql = new conex_mysql();
	    $mysql->conectar();
	    $sql = "select * from clientes where id='".$id."'";
	    $mysql_result = $mysql->consulta($sql);

					
	    $result = $mysql_result;

		if ($result->num_rows > 0) {

		  while($row = $result->fetch_assoc()) {
		  	$agua = $row['agua'];
		  	
		  }
		}
		$mysql->salir();



		if($cantidadVasos == 0){
		   print ("false"); 
		}else{
			print('[{"total":"'.$agua.'", "tomado":"'.$vasos.'", "hora":"'.$hora.'"}]');
		}
	}else if($accion == 'quitar'){

		$mysql = new conex_mysql();
	    $mysql->conectar();

	    $sql = "DELETE FROM agua WHERE idUsuario='".$id."' AND fecha='".$fecha."' ORDER BY hora DESC LIMIT 1";
	    $mysql->consulta($sql);
		$mysql->salir();
		print ("true");
	}else if($accion == 'agregar'){
		
		$mysql = new conex_mysql();
	    $mysql->conectar();

	    $sql = "INSERT INTO agua (idUsuario, hora, fecha) VALUES ('".$id."', '".$hora."', '".$fecha."')";

	    $mysql->consulta($sql);
		$mysql->salir();
		print ("true");
	}

	


?>