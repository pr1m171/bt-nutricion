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
                        <h4 class="page-title">Turno</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Turno</li>
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
    <div class="col-12">
<h3 style="color:#eb5a2c; font-weight: bold;">DETALLE DE TURNO:</h3><br>
        <div class="row">
            <div class="col-md-3"><h5 class="card-title"><b>PACIENTE:</b> <a href="index.php?page=cliente&id=<?php echo getCampoTurnos($_GET['id'],'pacienteid'); ?>"><?php echo getCampoCliente( getCampoTurnos($_GET['id'],'pacienteid') , 'nombre'); ?> </a> </h5></div>

            <div class="col-md-3"><h5 class="card-title"><b>FECHA Y HORA:</b> <?php echo getCampoTurnos($_GET['id'],'fecha'); ?> <?php echo getCampoTurnos($_GET['id'],'hora'); ?></h5></div>


        </div>
    </div>
</div>