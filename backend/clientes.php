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
                        <h4 class="page-title">Clientes</h4>
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
	<div class="col-12">
		<div class="table-responsive">
			<table id="zero_config" class="table table-striped table-bordered">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Cédula</th>
			            <th>Email</th>
			        </tr>
			    </thead>
			    <tbody>

					<?php

                    $mysql = new conex_mysql();
                    $mysql->conectar();
                    $mysql_result = $mysql->consulta('select * from clientes');

					
                    $result = $mysql_result;

                    if ($result->num_rows > 0) {
                    // output data of each row
                      while($row = $result->fetch_assoc()) {
					    ?>

						<tr>
						    <td><a href="index.php?page=cliente&id=<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?><a></td>
						    <td><?php echo $row["identificacion"]; ?></td>
						    <td><?php echo $row["email"]; ?></td>
						</tr>

					    <?php
					  }
                    }
					

                    $mysql->salir();
					?>


			 	</tbody>
	    		<tfoot>
				    <tr>
				        <th>Nombre</th>
				        <th>Cédula</th>
				        <th>Email</th>
				    </tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>






<?php
$extraScript = '
<script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js">
</script><script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
';
?>