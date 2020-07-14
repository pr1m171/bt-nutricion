<?php
$mysql = new conex_mysql();
$mysql->conectar();
$mysql_result = $mysql->consulta('DELETE FROM clientes WHERE id="'.$_GET['id'].'"');
$mysql->salir();

?>
<script>
                // similar behavior as an HTTP redirect
                window.location.replace("index.php?page=admin-clientes&admin=1");

                // similar behavior as clicking on a link
                window.location.href = "index.php?page=admin-clientes&admin=1";
                </script>