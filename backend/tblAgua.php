<?php

	function getCampoCliente($id, $campo){
		$mysql = new conex_mysql();
        $mysql->conectar();
        $sql = "select * from agua where idUsuario=".$id;
        $mysql_result = $mysql->consulta($sql);

					
        $result = $mysql_result;

		$field = "";
		
		

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $field = $row[$campo];
		  }
		}
		$mysql->salir();
		return $field;
	}

?>