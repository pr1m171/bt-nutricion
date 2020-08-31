<?php 
    session_start();
	/*ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);*/
    //Librerias auxiliares
    include("conexion.php"); 
    if(empty($_SESSION['usuario'])){
        if (!empty($_POST)){
            if($_POST['usuario'] == 'admin' && $_POST['password'] == 'admin'){
                $_SESSION['usuario'] = "admin";
                ?>
                    <script>
                    window.location.replace("index.php?admin=1");
                    window.location.href = "index.php?admin=1";
                    </script>
                <?php
            }else{

                    $mysql = new conex_mysql();
                    $mysql->conectar();
                    $mysql_result = $mysql->consulta('select * from nutricionista where email="' . $_POST['usuario'] . '"');

                    
                    $result = $mysql_result;

                    if ($result->num_rows > 0) {
                    // output data of each row
                      while($row = $result->fetch_assoc()) {
                        if($_POST['password'] == $row['password']){
                            $_SESSION['usuario'] = $row['id'];
                            ?>
                            <script>
                            window.location.replace("index.php");
                            window.location.href = "index.php";
                            </script>
                            <?php
                        }else{
                            ?>
                            <script>
                            window.location.replace("index.php?error=1");
                            window.location.href = "index.php?error=1";
                            </script>
                            <?php

                        }
                      }
                    }else{
                            ?>
                            <script>
                            window.location.replace("index.php?error=1");
                            window.location.href = "index.php?error=1";
                            </script>
                            <?php

                        }
                    

                    $mysql->salir();
            }
        }else{
            include("login.php");
        }
        
    }else{
        //VARIABLES GLOBALES
        $nutricionista = $_SESSION['usuario'];

        $rango = $_GET['admin'];

        
        include("tblAlimentos.php");
        include("tblClientes.php");
        include("tblDetalle.php");
        include("tblDieta.php");
        include("tblNutricionistas.php");
        include("tblTurnos.php");

        include("header.php");
        
        if($rango == '1' || $_SESSION['usuario'] == 'admin'){
            include("menu-admin.php");
        }else{
            include("menu.php");
        }

        
        

        $view = $_GET['page'];
        include($view . ".php");

        include("footer.php"); 
    }
        
?>