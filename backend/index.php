<?php include("conexion.php"); ?>
<?php
    ///// VARIABLES GLOBALES
    $nutricionista = 1;
?>
<?php include("header.php"); ?>
<?php include("menu.php"); ?>




                
                <?php

                    $view = $_GET['page'];

                    include($view . ".php");//

                ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include("footer.php"); ?>