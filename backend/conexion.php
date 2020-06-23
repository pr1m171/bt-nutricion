<?php
class conex_mysql {
	private $conexion;



	public function conectar(){
		if(!isset($this->conexion)){
			$servername = "localhost";
			$username = "root";
			$password = "passwd123";
			$dbname = "btnutricion";

			$this->conexion = new mysqli($servername, $username, $password, $dbname);
    		$this->conexion->query("SET NAMES 'utf8'");
		}
	}
	
	public function consulta($sql){
		$result = $this->conexion->query($sql);
		return $result;
	}

	public function cont($result){
		 
  			return $result->num_rows;

	}
	public function salir(){
		$this->conexion->close();
	}
}
?>