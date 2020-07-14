
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
                        <br>
                        <h5 class="card-title"><b>PACIENTE:</b> <?php echo getCampoCliente($_GET['id'], 'nombre'); ?></h5>
                        <div class="clienteFoto" style="background-image: url("media/"); ">

                        <div class="clienteFoto" style="background-image: url(media/<?php echo getCampoCliente($_GET['id'], 'imagen'); ?>);"></div>

                        </div>
                        <br>
                        <h5 class="card-title"><b>AFILIADO A BODYTECH:</b> <?php echo getCampoCliente($_GET['id'], 'afiliado'); ?></h5>
                        <h5 class="card-title"><b>ESTADO DE AFILIACIÓN:</b> <?php echo getCampoCliente($_GET['id'], 'estado'); ?></h5>
                        <h5 class="card-title"><b>SEDE:</b> <?php echo getCampoCliente($_GET['id'], 'sede'); ?></h5>
                        <h5 class="card-title"><b>PLAN:</b> <?php echo getCampoCliente($_GET['id'], 'suscripcion'); ?></h5>
                        <h5 class="card-title"><b>PERSONAL TRAINING:</b> <?php echo getCampoCliente($_GET['id'], 'personaltraining'); ?></h5>
                        <h5 class="card-title"><b>Cédula:</b> <?php echo getCampoCliente($_GET['id'], 'identificacion'); ?></h5>
                        <h5 class="card-title"><b>EPS:</b> <?php echo getCampoCliente($_GET['id'], 'seguromedico'); ?></h5>

                        <hr>
                        <h5 class="card-title"><b>INFORMACIÓN:</b></h5>

                                           
                        
                        <h5 class="card-title"><b>Genero:</b> <?php echo getCampoCliente($_GET['id'], 'sexo'); ?></h5>
                        <?php

                            $fecha_nacimiento = getCampoCliente($_GET['id'], 'fecha_nacimiento');

                            $anio = explode("/",$fecha_nacimiento);

                            $edad = 2020 - $anio[2];

                        ?>
                        <h5 class="card-title"><b>Edad:</b> <?php echo $edad ?></h5>
                        <h5 class="card-title"><b>ESTATURA:</b> <?php echo getCampoCliente($_GET['id'], 'estatura'); ?> cm</h5>
                        <h5 class="card-title"><b>PESO:</b> <?php echo getCampoCliente($_GET['id'], 'peso'); ?> Kg</h5>
                        <h5 class="card-title"><b>FRECUENCIA:</b> <?php echo getCampoCliente($_GET['id'], 'fcreposo'); ?> ppm</h5>
                        
                        <hr>

                        <?php
                            $mysql = new conex_mysql();
                            $mysql->conectar();
                            $sql = "select * from dieta where idPaciente='".$_GET['id']."'";
                            $mysql_result = $mysql->consulta($sql);
                            if ($mysql_result->num_rows > 0) {
                                $txtDieta = "VER DIETA";
                            }else{
                                $txtDieta = "CREAR DIETA";
                            }

                        ?>

                        <button type="button" class="btn waves-effect waves-light btn-primary" onclick="window.location.href='index.php?page=dieta&id=<?php echo $_GET['id']; ?>'"><?php echo $txtDieta; ?></button>

                        <hr>
                        <br>




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
    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#messages3" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Perfil Nutricional</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Antecedentes</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Perfil Deportivo</span></a> </li>
    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Perfil Fisiológico</span></a> </li>
    
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane p-20" id="home2" role="tabpanel">
        <h3 style="color:#eb5a2c; font-weight: bold;">PERSONALES:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>PATOLÓGICOS:</b> <?php echo getCampoCliente($_GET['id'], 'patologicos'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>OBSERVACIONES:</b> <?php echo getCampoCliente($_GET['id'], 'observaciones'); ?></h5></div>
            <div class="col-md-12">
                <h5 class="card-title"><b>TRAUMÁTICOS:</b> <?php echo getCampoCliente($_GET['id'], 'traumaticos'); ?></h5>
                <h5 class="card-title"><b>UBICACION:</b> <?php echo getCampoCliente($_GET['id'], 'ubicacion'); ?></h5>
            </div>
        </div>
        <br><br>
        <h3 style="color:#eb5a2c; font-weight: bold;">TOXICOALÉRGICOS:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>TABAQUISMO:</b> <?php echo getCampoCliente($_GET['id'], 'tabaquismo'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>OTRAS SUSTANCIAS:</b> <?php echo getCampoCliente($_GET['id'], 'medicamentos'); ?></h5></div>
        </div>

    </div>
    <div class="tab-pane  p-20" id="profile2" role="tabpanel">
        <h3 style="color:#eb5a2c; font-weight: bold;">ACTIVIDAD:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>FRECUENCIA:</b> <?php echo getCampoCliente($_GET['id'], 'frecuenciadeporte'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>INTENSIDAD:</b> <?php echo getCampoCliente($_GET['id'], 'intensidad'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>DEPORTE:</b> <?php echo getCampoCliente($_GET['id'], 'deporte'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>MODO:</b> <?php echo getCampoCliente($_GET['id'], 'modo'); ?></h5></div>
            <div class="col-md-12">
                <h5 class="card-title"><b>TIEMPO:</b> <?php echo getCampoCliente($_GET['id'], 'tiempo'); ?></h5>
            </div>
        </div>
        <br><br>
    </div>

    <div class="tab-pane p-20" id="messages2" role="tabpanel">

        <h3 style="color:#eb5a2c; font-weight: bold;">INFORMACIÓN:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>ALTURA:</b> <?php echo getCampoCliente($_GET['id'], 'estatura'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>PESO:</b> <?php echo getCampoCliente($_GET['id'], 'peso'); ?></h5></div>
            <div class="col-md-12"><hr></div>
            <div class="col-md-3"><h5 class="card-title"><b>F.C. REPOSO:</b> <?php echo getCampoCliente($_GET['id'], 'fcreposo'); ?></h5></div>
            <div class="col-md-3"><h5 class="card-title"><b>F.C. MÁXIMA:</b> <?php echo getCampoCliente($_GET['id'], 'fcmaxima'); ?></h5></div>
            <div class="col-md-3"><h5 class="card-title"><b>TENSIÓN ARTERIAL:</b> <?php echo getCampoCliente($_GET['id'], 'tensionarterial'); ?></h5></div>
                       

        </div>

        <br><br><h3 style="color:#eb5a2c; font-weight: bold;">ANTROPOMETRIA:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>% GRASA:</b> <?php echo getCampoCliente($_GET['id'], 'pgrasa'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>Kg GRASA:</b> <?php echo getCampoCliente($_GET['id'], 'kggrasa'); ?></h5></div>

            <div class="col-md-6"><h5 class="card-title"><b>% MÚSCULO:</b> <?php echo getCampoCliente($_GET['id'], 'pmusculo'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>Kg MÚSCULO:</b> <?php echo getCampoCliente($_GET['id'], 'kggrasa'); ?></h5></div>

            <div class="col-md-12"><hr></div>
            <div class="col-md-3"><h5 class="card-title"><b>PERÍMETRO ABDOMINAL:</b> <?php echo getCampoCliente($_GET['id'], 'perimetroabdominal'); ?> cm</h5></div>
            <div class="col-md-3"><h5 class="card-title"><b>% GRASA VISCERAL:</b> <?php echo getCampoCliente($_GET['id'], 'pgrasavisceral'); ?></h5></div>
            <div class="col-md-3"><h5 class="card-title"><b>I.M.M. ABSOLUTA:</b> <?php echo getCampoCliente($_GET['id'], 'immabsuluta'); ?></h5></div>

        </div>


        <br><br><h3 style="color:#eb5a2c; font-weight: bold;">PLIEGUES (LADO DERECHO):</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>TRICEP:</b> <?php echo getCampoCliente($_GET['id'], 'triceps'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>SUBESCAPULAR:</b> <?php echo getCampoCliente($_GET['id'], 'subescapular'); ?></h5></div>

            <div class="col-md-6"><h5 class="card-title"><b>SUBRAILIACO:</b> <?php echo getCampoCliente($_GET['id'], 'subrailiaco'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>ABDOMINAL:</b> <?php echo getCampoCliente($_GET['id'], 'abdominal'); ?></h5></div>

            <div class="col-md-6"><h5 class="card-title"><b>MUSLO:</b> <?php echo getCampoCliente($_GET['id'], 'plieguesmuslo'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>PANTORRILLA:</b> <?php echo getCampoCliente($_GET['id'], 'plieguespantorrilla'); ?></h5></div>

            <div class="col-md-6"><h5 class="card-title"><b>SUMATORIA:</b> <?php echo getCampoCliente($_GET['id'], 'sumatoria'); ?></h5></div>
        </div>

        <br><br><h3 style="color:#eb5a2c; font-weight: bold;">CIRCUNFERENCIAS (LADO DERECHO):</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>TORAX:</b> <?php echo getCampoCliente($_GET['id'], 'torax'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>CADERA:</b> <?php echo getCampoCliente($_GET['id'], 'cadera'); ?></h5></div>

            <div class="col-md-6"><h5 class="card-title"><b>BRAZO:</b> <?php echo getCampoCliente($_GET['id'], 'brazo'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>ANTEBRAZO:</b> <?php echo getCampoCliente($_GET['id'], 'antebrazo'); ?></h5></div>

            <div class="col-md-6"><h5 class="card-title"><b>MUSLO:</b> <?php echo getCampoCliente($_GET['id'], 'circunferenciamuslo'); ?></h5></div>
            <div class="col-md-6"><h5 class="card-title"><b>PANTORRILLA:</b> <?php echo getCampoCliente($_GET['id'], 'circunferenciapantorrilla'); ?></h5></div>
            <div class="col-md-12"><hr></div>
            <div class="col-md-12"><h5 class="card-title"><b>OBSERVACIONES:</b> <?php echo getCampoCliente($_GET['id'], 'circunferenciaobservaciones'); ?></h5></div>

            

        </div>


        <br><br>

    </div>

    <div class="tab-pane p-20 active" id="messages3" role="tabpanel">
<?php
        if (!empty($_POST)){

            /** ACA VOY A GUARDAR LOS CAMBIOS CHAJARI **/

            $mysql = new conex_mysql();
            $mysql->conectar();

            $mysql_result = $mysql->consulta('UPDATE clientes SET alergias="'.$_POST['alergias'].'", preferidos="'.$_POST['preferidos'].'", rechazados="'.$_POST['rechazados'].'", agua="'.$_POST['agua'].'", aguaenrena="'.$_POST['aguaentrena'].'", suplementacion="'.$_POST['suplementacion'].'", preparacion="'.$_POST['preparacion'].'" WHERE id="'.$_POST['cliente'].'"');

            $mysql->salir();


        }
?>
        <form action="index.php?page=cliente&id=<?php echo $_GET['id']; ?>" method="POST">
            <input type="hidden" name="cliente" id="cliente" value="<?php echo $_GET['id']; ?>" />

        <h3 style="color:#eb5a2c; font-weight: bold;">ALIMENTOS:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>ALERGIAS:</b> </h5>
                <textarea name="alergias" id="alergias" class="form-control" rows="3"><?php echo getCampoCliente($_GET['id'], 'alergias'); ?> </textarea><br></div>
            
            <div class="col-md-6"><h5 class="card-title"><b>PREFERIDOS:</b> </h5>
                <textarea name="preferidos" id="preferidos" class="form-control" rows="3"><?php echo getCampoCliente($_GET['id'], 'preferidos'); ?></textarea><br></div>
           
            <div class="col-md-6"><h5 class="card-title"><b>RECHAZADOS:</b> </h5>
                <textarea name="rechazados" id="rechazados" class="form-control" rows="3"><?php echo getCampoCliente($_GET['id'], 'rechazados'); ?></textarea>
            </div>           
        </div>

        <br><br><h3 style="color:#eb5a2c; font-weight: bold;">SUEÑO:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>HORAS:</b> <?php echo getCampoCliente($_GET['id'], 'duerme'); ?></h5></div>

        </div>

        <br><br><h3 style="color:#eb5a2c; font-weight: bold;">HIDRATACIÓN:</h3><br>
        <div class="row">
            <div class="col-md-6"><h5 class="card-title"><b>CANTIDAD DE AGUA SUGERIDA:</b></h5>
                <div class="col-md-6"><input type="text" class="form-control" name="agua" value="<?php echo getCampoCliente($_GET['id'], 'agua'); ?>" /></div>
            </div>
            <div class="col-md-6">
                <h5 class="card-title"><b>HIDRATACIÓN DURANTE ENTRENAMIENTO:</b></h5>
                <div class="col-md-6"><select name="aguaentrena" id="aguaentrena" class="form-control">
                    <option value="SI" <?php if(getCampoCliente($_GET['id'], 'aguaentrena') == 'SI'){ echo "selected"; } ?>>SI</option>
                    <option value="NO" <?php if(getCampoCliente($_GET['id'], 'aguaentrena') == 'NO'){ echo "selected"; } ?>>NO</option>
                </select></div>
            </div>
        </div>

        <br><br><h3 style="color:#eb5a2c; font-weight: bold;">DOSIFICACIÓN:</h3><br>
        <div class="row">

            <div class="col-md-12"><br><br><h5 class="card-title"><b>SUMPLEMENTACIÓN Y MODO DE CONSUMO:</b></h5>
                <textarea name="suplementacion" id="suplementacion" class="form-control" rows="3"><?php echo getCampoCliente($_GET['id'], 'suplementacion'); ?></textarea>
            </div>

            <div class="col-md-12">
                <br><br><h5 class="card-title"><b>QUIEN PREPARA Y COMPRA LOS ALIMENTOS:</b></h5>
                    <textarea name="preparacion" id="preparacion" class="form-control" rows="3"><?php echo getCampoCliente($_GET['id'], 'preparacion'); ?></textarea>
            </div>

        </div>

        <div class="form-actions">
                <div class="text-right">
                    <br><br><button type="submit" class="btn btn-info">Guardar</button>
                </div>
            </div>


        </form>


    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>






<?php
$extraScript = '
    <script>
    $( document ).ready(function() {
        $("#sidebarnav > li:nth-child(4)").addClass("selected");
        $("#sidebarnav > li.sidebar-item.selected > ul").addClass("in");
        $("#activo").addClass("active");
        $("#mis-clientes").addClass("active");
     });
</script>
';
?>