<?php
class conex_mysql {
	private $conexion;

	public function conectar(){
		$servername = "localhost";
		$username = "root";
		$password = "passwd123";
		$dbname = "btnutricion";
		if(!isset($this->conexion)){
			$this->conexion = mysqli_connect($servername, $username, $password, $dbname);
    		mysqli_query("SET NAMES 'utf8'");
		}
	}
	
	public function consulta($sql){
		$result = mysqli_query($sql, $this->conexion);
		return $result;
	}

	public function cont($result){
  			return mysqli_num_rows($result);
	}
	public function salir(){
		mysqli_close($this->conexion);
	}
}
?>