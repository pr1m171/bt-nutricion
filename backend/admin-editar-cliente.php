<?php include("tblClientes.php"); ?>
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
                                                        
                                                        



		<form action="index.php?page=admin-editar-cliente&admin=1&id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cliente: </label> <input type="text" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'nombre'); ?>" placeholder="Nombre completo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cédula/Documento: </label> <input type="text" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'identificacion'); ?>" placeholder="Cédula/documento">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Genero: </label> <input type="text" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'genero'); ?>" placeholder="Nombre completo">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Fecha de nacimiento: </label> <input type="text" class="form-control" value="<?php echo getCampoCliente($_GET['id'], 'fecha_nacimiento'); ?>" placeholder="Fecha de nacimiento">
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







<?php
$extraScript = '

';
?>