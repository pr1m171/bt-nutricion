<?php
	session_start();
	session_unset();
	session_destroy();
?>
<script>
window.location.replace("index.php");
window.location.href = "index.php";
</script>