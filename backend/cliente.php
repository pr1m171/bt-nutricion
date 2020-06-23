<?php include("tblClientes.php"); ?>
<!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>


        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Left Part  -->
            <!-- ============================================================== -->
            <div class="left-part bg-white fixed-left-part">
                <!-- Mobile toggle button -->
                <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                <!-- Mobile toggle button -->
                <div class="p-15">
                    <h4></h4>
                </div>
                <div class="scrollable position-relative" style="height:100%;">
                    <div class="p-15">
                        <h5 class="card-title"><b>PACIENTE:</b> <?php echo getCampoCliente($_GET['id'], 'nombre'); ?></h5>
                        <img src="media/<?php echo getCampoCliente($_GET['id'], 'imagen'); ?>" class="img-fluid " alt="users">
                        <p class="m-t-10">This is example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn waves-effect waves-light btn-info">Info</button>
                    </div>

                   
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Left Part  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Part  Mail Compose -->
            <!-- ============================================================== -->
            <div class="right-part">
                <div class="p-20">
                    <div class="card">
                        <div class="card-body">


                            <!-- Nav tabs -->
<ul class="nav nav-tabs customtab" role="tablist">
    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="home2" role="tabpanel">
        <div class="p-20">
            <h3>Best Clean Tab ever</h3>
            <h4>you can use it with the small code</h4>
            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
        </div>
    </div>
    <div class="tab-pane  p-20" id="profile2" role="tabpanel">2</div>
    <div class="tab-pane p-20" id="messages2" role="tabpanel">3</div>
</div>

                        </div>
                    </div>
                </div>
            </div>






<?php
$extraScript = '
<script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js">
</script><script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
';
?>