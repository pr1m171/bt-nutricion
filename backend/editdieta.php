<?php

$mysql = new conex_mysql();
$mysql->conectar();

$mysql_result = $mysql->consulta('UPDATE dieta SET detalle="'.$_POST['detalle'].'", hora="'.$_POST['hora'].'", dia="'.$_POST['dia'].'", fecha="'.$_POST['fecha'].'", idPaciente="'.$_POST['usuario'].'"');

$mysql->salir();


$iddieta = $_POST['dieta'];

$mysql = new conex_mysql();
$mysql->conectar();
$mysql_result = $mysql->consulta('DELETE FROM detalle WHERE iddieta="'.$iddieta.'"');
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