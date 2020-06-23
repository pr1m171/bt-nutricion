<?php
class conex_mysql {
	private $conexion;

	public function conectar(){
		$servername = "logia33.com";
		$username = "gospina_backend";
		$password = "keI031w^";
		$dbname = "gospina_backend";
		if(!isset($this->conexion)){
			$this->conexion = mysqli_connect($servername, $username, $password, $dbname);
    		mysqli_query("SET NAMES 'utf8'");
		}
	}
	
	public function consulta($sql){
		$result = mysqli_query($this->conexion, $sql);
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