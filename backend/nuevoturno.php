<?php include("tblClientes.php"); ?>
<?php include("tblTurnos.php"); ?>
<!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Nuevo Turno</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Nuevo turno</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!--  --> 
            <div class="container-fluid">
                                                        
                                                        


<div class="row">
    <div class="col-12">
<h3 style="color:#eb5a2c; font-weight: bold;">DETALLE DE NUEVO TURNO:</h3><br>
        <div class="row">
            <div class="col-md-4">
                       <form class="m-t-30" method="POST" action="index.php?page=addturno"> 
                                    <div class="form-group m-b-30">
                                        <label for="usuario">Seleccionar cliente</label>
                                        <select class="form-control" id="usuario" name="usuario">
                                            
                                                                <?php

                                                                    $mysql = new conex_mysql();
                                                                    $mysql->conectar();
                                                                    $mysql_result = $mysql->consulta('select * from clientes');

                                                                    
                                                                    $result = $mysql_result;

                                                                    if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                      while($row = $result->fetch_assoc()) {
                                                                        ?>
                                                                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?> - <?php echo $row["identificacion"]; ?></option>                                                             
        
                                                                        <?php
                                                                      }
                                                                    }
                                                                    

                                                                    $mysql->salir();
                                                                ?>
                                        </select>
                                        <input type="hidden" value="<?php echo $_GET['fecha']; ?>" id="fecha" name="fecha" />
                                        <input type="hidden" value="<?php echo $_GET['hora']; ?>" id="hora" name="hora" />
                                        <button type="submit" class="btn waves-effect waves-light btn-primary float-right">Agregar</button>
                                    </div>

                                </form>
            </div>
        </div>


    </div>
</div>



<?php
$extraScript = '
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>
$(document).ready(function () {
      $("#usuario").selectize({
          sortField: "text"
      });
  });
  </script>
';
?>
