<?php

	function getCampoNutricionistas($id, $campo){
		$mysql = new conex_mysql();
        $mysql->conectar();
        $sql = "select * from nutricionista where id=".$id;
        $mysql_result = $mysql->consulta($sql);

					
        $result = $mysql_result;

		$field = "";
		
		

		if ($result->num_rows > 0) {
			
		  while($row = $result->fetch_assoc()) {
		    $field = $row[$campo];
		  }
		}
		$mysql->salir();
		return $field;
	}

?>