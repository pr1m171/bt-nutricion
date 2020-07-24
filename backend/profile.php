
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
                        <h4 class="page-title">Mi Perfil: </h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Mi Perfil</li>
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

                if ( 0 < $_FILES['file']['error'] ) {
                    $mysql_result = $mysql->consulta('UPDATE nutricionista SET nombre="'.$_POST['nombre'].'", apellido="'.$_POST['apellido'].'", sexo="'.$_POST['sexo'].'", email="'.$_POST['email'].'", cedula="'.$_POST['identificacion'].'", telefono="'.$_POST['telefono'].'" WHERE id="'.$nutricionista.'"');
                }
                else {
                    move_uploaded_file($_FILES['file']['tmp_name'], 'media/uploads/' . $nutricionista . $_FILES['file']['name']);
                    $imagen = $nutricionista . $_FILES['file']['name'];
                    $mysql_result = $mysql->consulta('UPDATE nutricionista SET nombre="'.$_POST['nombre'].'", apellido="'.$_POST['apellido'].'", sexo="'.$_POST['sexo'].'", email="'.$_POST['email'].'", cedula="'.$_POST['identificacion'].'", telefono="'.$_POST['telefono'].'", imagen="'.$imagen.'" WHERE id="'.$nutricionista.'"');
                }

                $mysql->salir();


            }
        ?>
    </div>  
</div>

<div class="row">
    <div class="col-md-8">

        <form action="index.php?page=profile" method="POST" enctype="multipart/form-data">
            <div class="form-body">

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Imagen de perfil: </label><input type="file" name="file" id="file">
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NOMBRE: </label> <input name="nombre" id="nombre" type="text" class="form-control" value="<?php echo getCampoNutricionistas($nutricionista, 'nombre'); ?>" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>APELLIDO: </label> <input name="apellido" id="apellido" type="text" class="form-control" value="<?php echo getCampoNutricionistas($nutricionista, 'apellido'); ?>" placeholder="Apellido">
                        </div>
                    </div>

                    

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>GENERO: </label> 
                            <select class="form-control" id="sexo" name="sexo">
                                <option <?php if(getCampoNutricionistas($nutricionista, 'sexo') == "F"){ echo "selected"; } ?> value="F">FEMENINO</option>
                                <option <?php if(getCampoNutricionistas($nutricionista, 'sexo') == "M"){ echo "selected"; } ?> value="M">MASCULINO</option>
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>CÉDULA/DOCUMENTO: </label> <input name="identificacion" id="identificacion" type="text" class="form-control" value="<?php echo getCampoNutricionistas($nutricionista, 'cedula'); ?>" placeholder="Cédula/documento">
                        </div>
                    </div>

                    <!-- <div class="col-md-4">
                        <div class="form-group">
                            <label>CONTRASEÑA: </label> <input name="password" id="password" type="password" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'password'); ?>" placeholder="Contraseña">
                        </div>
                    </div> -->
                    
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>EMAIL: </label> <input name="email" id="email" type="email" class="form-control" value="<?php echo getCampoNutricionistas($nutricionista, 'email'); ?>" placeholder="email@email.com">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>TELEFONO: </label> <input name="telefono" id="telefono" type="telefono" class="form-control" value="<?php echo getCampoNutricionistas($nutricionista, 'telefono'); ?>" placeholder="">
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