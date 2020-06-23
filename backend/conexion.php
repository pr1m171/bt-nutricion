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
		$result = mysqli_query($sql, $this->conexion) or die('Consulta fallida: ' . mysql_error());
		return $result;
	}

	public function cont($result){
		 if(!is_resource($result)){
		 	return false;
		 }else{
  			return mysqli_num_rows($result);
  		}

	}
	public function salir(){
		mysqli_close($this->conexion);
	}
}
?>