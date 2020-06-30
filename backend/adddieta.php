<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$mysql = new conex_mysql();
$mysql->conectar();
$mysql_result = $mysql->consulta('INSERT INTO dieta (detalle, idPaciente, fecha, hora, dia, idNutricion) VALUES ("'.$_POST['detalle'].'", "'.$_POST['usuario'].'", "'.$_POST['fecha'].'", "'.$_POST['hora'].'", "'.$_POST['dia'].'", "'.$nutricionista.'")');

$iddieta = $mysql->getID();
$mysql->salir();

echo "IDS: <br>";
$ids = explode("/", $_POST['ids']);

for ($y=0; $y<count($ids);  $y++) {
   if(IsNullOrEmptyString($ids[$y])){}else{

	   	$idAlimento = $ids[$y];

			$mysql = new conex_mysql();
			$mysql->conectar();
			$mysql_result = $mysql->consulta('INSERT INTO detalle (iddieta, idalimento) VALUES ("'.$iddieta.'", "'.$idAlimento.'")');
			$mysql->salir();


   }
}

?>
<script>
// similar behavior as an HTTP redirect
window.location.replace("index.php?page=dieta&id=<?php echo $_POST['usuario']; ?>");

// similar behavior as clicking on a link
window.location.href = "index.php?page=dieta&id=<?php echo $_POST['usuario']; ?>";
</script>