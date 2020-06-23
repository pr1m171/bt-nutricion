<?php

	function getCampoCliente($id, $campo){
		$conn = new mysqli($servername, $username, $password, $dbname);
		$field = "";
		$sql = "SELECT * FROM clientes WHERE id=".$id;
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    $field = $row[$campo];
		  }
		} else {
		  
		}
		mysqli_close($conn);
		return $field;
	}

?>