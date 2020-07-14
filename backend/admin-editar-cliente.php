
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

                $mysql_result = $mysql->consulta('UPDATE clientes SET nombre="'.$_POST['nombre'].'", email="'.$_POST['email'].'", password="'.$_POST['password'].'", sexo="'.$_POST['sexo'].'", fecha_nacimiento="'.$_POST['fecha_nacimiento'].'", identificacion="'.$_POST['identificacion'].'", afiliado="'.$_POST['afiliado'].'", estado="'.$_POST['estado'].'", sede="'.$_POST['sede'].'", suscripcion="'.$_POST['suscripcion'].'", personaltraining="'.$_POST['personaltraining'].'" WHERE id="'.$_POST['id'].'"');

                $mysql->salir();


            }
        ?>
    </div>  
</div>

<div class="row">
    <div class="col-md-8">

		<form action="index.php?page=admin-editar-cliente&admin=1&id=<?php echo $_GET['id']; ?>" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>" />
            <div class="form-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CLIENTE/PACIENTE: </label> <input name="nombre" id="nombre" type="text" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'nombre'); ?>" placeholder="Nombre completo">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>EMAIL: </label> <input name="email" id="email" type="email" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'email'); ?>" placeholder="email@email.com">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CONTRASEÑA: </label> <input name="password" id="password" type="password" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'password'); ?>" placeholder="Nombre completo">
                        </div>
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>GENERO: </label> 
                            <select class="form-control" id="sexo" name="sexo">
                                <option <?php if(getCampoCliente($_GET['id'], 'sexo') == "F"){ echo "selected"; } ?> value="F">FEMENINO</option>
                                <option <?php if(getCampoCliente($_GET['id'], 'sexo') == "M"){ echo "selected"; } ?> value="M">MASCULINO</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>FECHA DE NACIMIENTO: </label> <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'fecha_nacimiento'); ?>" placeholder="Fecha de nacimiento">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CÉDULA/DOCUMENTO: </label> <input name="identificacion" id="identificacion" type="text" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'identificacion'); ?>" placeholder="Cédula/documento">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>AFILIADO A BODYTECH: </label>
                            <select class="form-control" id="afiliado" name="afiliado">
                                <option <?php if(getCampoCliente($_GET['id'], 'afiliado') == "SI"){ echo "selected"; } ?> value="SI">SI</option>
                                <option <?php if(getCampoCliente($_GET['id'], 'afiliado') == "NO"){ echo "selected"; } ?> value="NO">NO</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ESTADO DE AFILIACIÓN: </label>
                            <select class="form-control" id="estado" name="estado">
                                <option <?php if(getCampoCliente($_GET['id'], 'estado') == "ACTIVO"){ echo "selected"; } ?> value="ACTIVO">ACTIVO</option>
                                <option <?php if(getCampoCliente($_GET['id'], 'estado') == "INACTIVO"){ echo "selected"; } ?> value="INACTIVO">INACTIVO</option>
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
                                        <option <?php if(getCampoCliente($_GET['id'], 'sede') == $row['sede']){ echo "selected"; } ?> value="<?php echo $row["sede"]; ?>"><?php echo $row["sede"]; ?></option>                                                             

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
                                <option <?php if(getCampoCliente($_GET['id'], 'suscripcion') == "Nutricion Virtual"){ echo "selected"; } ?> value="Nutricion Virtual">Nutricion Virtual</option>
                                <option <?php if(getCampoCliente($_GET['id'], 'suscripcion') == "Nutricion Virtual afiliado con personal training"){ echo "selected"; } ?> value="Nutricion Virtual afiliado con personal training">Nutricion Virtual afiliado con personal training</option>
                                <option <?php if(getCampoCliente($_GET['id'], 'suscripcion') == "Bienestar y salud"){ echo "selected"; } ?> value="Bienestar y salud">Bienestar y salud</option>
                                <option <?php if(getCampoCliente($_GET['id'], 'suscripcion') == "Control de Peso"){ echo "selected"; } ?> value="Control de Peso">Control de Peso</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>PERSONAL TRAINING: </label>
                            <select class="form-control" id="personaltraining" name="personaltraining">
                                <option <?php if(getCampoCliente($_GET['id'], 'personaltraining') == "SI"){ echo "selected"; } ?> value="SI">SI</option>
                                <option <?php if(getCampoCliente($_GET['id'], 'personaltraining') == "NO"){ echo "selected"; } ?> value="NO">NO</option>
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