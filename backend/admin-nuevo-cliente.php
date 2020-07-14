
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
                        <h4 class="page-title">Cliente: </h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">clientes</li>
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
            <div class="container-fluid">
                                                        
                                                        
<div class="row">
    <div class="col-md-6">
        <?php
            if (!empty($_POST)){

                /** ACA VOY A GUARDAR LOS CAMBIOS CHAJARI **/

                $mysql = new conex_mysql();
                $mysql->conectar();

                $mysql_result = $mysql->consulta('INSERT INTO clientes (nombre, email, password, sexo, fecha_nacimiento, identificacion, afiliado, estado, sede, suscripcion, personaltraining) VALUES ("'.$_POST['nombre'].'","'.$_POST['email'].'","'.$_POST['password'].'","'.$_POST['sexo'].'","'.$_POST['fecha_nacimiento'].'","'.$_POST['identificacion'].'","'.$_POST['afiliado'].'","'.$_POST['estado'].'","'.$_POST['sede'].'","'.$_POST['suscripcion'].'","'.$_POST['personaltraining'].'")');

                $mysql->salir();
        ?>
                <script>


                  // similar behavior as an HTTP redirect
                window.location.replace("index.php?page=admin-clientes&admin=1");

                // similar behavior as clicking on a link
                window.location.href = "index.php?page=admin-clientes&admin=1";
                
                
                </script>
        <?php
            }
        ?>
    </div>  
</div>

<div class="row">
    <div class="col-md-8">

		<form action="index.php?page=admin-nuevo-cliente&admin=1" method="POST">
            <div class="form-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CLIENTE/PACIENTE: </label> <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre completo">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>EMAIL: </label> <input name="email" id="email" type="email" class="form-control" placeholder="email@email.com">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CONTRASEÑA: </label> <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña">
                        </div>
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>GENERO: </label> 
                            <select class="form-control" id="sexo" name="sexo">
                                <option value="F">FEMENINO</option>
                                <option value="M">MASCULINO</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>FECHA DE NACIMIENTO: </label> <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" placeholder="dd/mm/aaaa">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CÉDULA/DOCUMENTO: </label> <input name="identificacion" id="identificacion" type="text" class="form-control" placeholder="Cédula/documento">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>AFILIADO A BODYTECH: </label>
                            <select class="form-control" id="afiliado" name="afiliado">
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ESTADO DE AFILIACIÓN: </label>
                            <select class="form-control" id="estado" name="estado">
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="INACTIVO">INACTIVO</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>SEDE: </label>
                            <select class="form-control" id="sede" name="sede">
                                
                                <?php

                                    $mysql = new conex_mysql();
                                    $mysql->conectar();
                                    $mysql_result = $mysql->consulta('select * from sucursales where empresa="BODYTECH"');

                                    
                                    $result = $mysql_result;

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $row["sede"]; ?>"><?php echo $row["sede"]; ?></option>                                                             

                                        <?php
                                      }
                                    }
                                    

                                    $mysql->salir();
                                ?>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>PLAN: </label>
                            <select class="form-control" id="suscripcion" name="suscripcion">
                                <option value="Nutricion Virtual">Nutricion Virtual</option>
                                <option value="Nutricion Virtual afiliado con personal training">Nutricion Virtual afiliado con personal training</option>
                                <option value="Bienestar y salud">Bienestar y salud</option>
                                <option value="Control de Peso">Control de Peso</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>PERSONAL TRAINING: </label>
                            <select class="form-control" id="personaltraining" name="personaltraining">
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                            </select>
                        </div>
                    </div>

                </div>



            </div>
            <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
            </div>
        </form>

    </div>
</div>





<?php
$extraScript = '
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>

$(document).ready(function () {
      $("#sede").selectize({
          sortField: "text"
      });   
});
  </script>
';
?>