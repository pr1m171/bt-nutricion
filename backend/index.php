<?php 

	/*ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);*/
    //Librerias axiliares
    include("conexion.php"); 

    //VARIABLES GLOBALES
    $nutricionista = 1;

    $rango = $_GET['admin'];

    include("header.php");


    if($rango == '1'){
        include("menu-admin.php");
    }else{
        include("menu.php");
    }

    
    

    $view = $_GET['page'];
    include($view . ".php");

    include("footer.php"); 
?>