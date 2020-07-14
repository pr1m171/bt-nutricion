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
                        <h4 class="page-title">Mi Perfil - Configurar: </h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Configurar</li>
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
        
        $horario = $_POST['lunesA'] . ",";
        $horario .= $_POST['lunesB'] . ",";
        $horario .= $_POST['martesA'] . ",";
        $horario .= $_POST['martesB'] . ",";
        $horario .= $_POST['miercolesA'] . ",";
        $horario .= $_POST['miercolesB'] . ",";
        $horario .= $_POST['juevesA'] . ",";
        $horario .= $_POST['juevesB'] . ",";
        $horario .= $_POST['viernesA'] . ",";
        $horario .= $_POST['viernesB'] . ",";
        $horario .= $_POST['sabadoA'] . ",";
        $horario .= $_POST['sabadoB'] . ",";
        $horario .= $_POST['domingoA'] . ",";
        $horario .= $_POST['domingoB'];

        $mysql = new conex_mysql();
        $mysql->conectar();

        $mysql_result = $mysql->consulta('UPDATE nutricionista SET horario="'.$horario.'" WHERE id="'.$nutricionista.'"');

        $mysql->salir();
    }
?>
    </div>  
</div>

<div class="row">
    <div class="col-md-6">

        <form action="index.php?page=config" method="POST">
            <div class="form-body">

                <?php 
                    $horarios = getCampoNutricionistas($nutricionista, 'horario');
                    $hora = explode(",",$horarios);

                ?>               

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>HORARIOS DE ATENCIÓN: </label> 
                            <hr>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <label>LUNES</label>
                            </div>
                            <div class="col-md-5">
                                <select name="lunesA" id="lunesA" class="form-control">
                                    <option value="0LA" <?php if($hora[0] == '0LA'){ echo 'selected'; } ?> >Sin Atención</option>
                                    <option value="1LA" <?php if($hora[0] == '1LA'){ echo 'selected'; } ?> >6:00</option>
                                    <option value="2LA" <?php if($hora[0] == '2LA'){ echo 'selected'; } ?> >7:00</option>
                                    <option value="3LA" <?php if($hora[0] == '3LA'){ echo 'selected'; } ?> >8:00</option>
                                    <option value="4LA" <?php if($hora[0] == '4LA'){ echo 'selected'; } ?> >9:00</option>
                                    <option value="5LA" <?php if($hora[0] == '5LA'){ echo 'selected'; } ?> >10:00</option>
                                    <option value="6LA" <?php if($hora[0] == '6LA'){ echo 'selected'; } ?> >11:00</option>
                                    <option value="7LA" <?php if($hora[0] == '7LA'){ echo 'selected'; } ?> >12:00</option>
                                    <option value="8LA" <?php if($hora[0] == '8LA'){ echo 'selected'; } ?> >13:00</option>
                                    <option value="9LA" <?php if($hora[0] == '9LA'){ echo 'selected'; } ?> >14:00</option>
                                    <option value="10LA" <?php if($hora[0] == '10LA'){ echo 'selected'; } ?> >15:00</option>
                                    <option value="11LA" <?php if($hora[0] == '11LA'){ echo 'selected'; } ?> >16:00</option>
                                    <option value="12LA" <?php if($hora[0] == '12LA'){ echo 'selected'; } ?> >17:00</option>
                                    <option value="13LA" <?php if($hora[0] == '13LA'){ echo 'selected'; } ?> >18:00</option>
                                    <option value="14LA" <?php if($hora[0] == '14LA'){ echo 'selected'; } ?> >19:00</option>
                                    <option value="15LA" <?php if($hora[0] == '15LA'){ echo 'selected'; } ?> >20:00</option>
                                    <option value="16LA" <?php if($hora[0] == '16LA'){ echo 'selected'; } ?> >21:00</option>
                                    <option value="17LA" <?php if($hora[0] == '17LA'){ echo 'selected'; } ?> >22:00</option>
                                    <option value="18LA" <?php if($hora[0] == '18LA'){ echo 'selected'; } ?> >23:00</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select name="lunesB" id="lunesB" class="form-control">
                                    <option value="0LB" <?php if($hora[1] == '0LB'){ echo 'selected'; } ?> >Sin Atención</option>
                                    <option value="1LB" <?php if($hora[1] == '1LB'){ echo 'selected'; } ?> >6:00</option>
                                    <option value="2LB" <?php if($hora[1] == '2LB'){ echo 'selected'; } ?> >7:00</option>
                                    <option value="3LB" <?php if($hora[1] == '3LB'){ echo 'selected'; } ?> >8:00</option>
                                    <option value="4LB" <?php if($hora[1] == '4LB'){ echo 'selected'; } ?> >9:00</option>
                                    <option value="5LB" <?php if($hora[1] == '5LB'){ echo 'selected'; } ?> >10:00</option>
                                    <option value="6LB" <?php if($hora[1] == '6LB'){ echo 'selected'; } ?> >11:00</option>
                                    <option value="7LB" <?php if($hora[1] == '7LB'){ echo 'selected'; } ?> >12:00</option>
                                    <option value="8LB" <?php if($hora[1] == '8LB'){ echo 'selected'; } ?> >13:00</option>
                                    <option value="9LB" <?php if($hora[1] == '9LB'){ echo 'selected'; } ?> >14:00</option>
                                    <option value="10LB" <?php if($hora[1] == '10LB'){ echo 'selected'; } ?> >15:00</option>
                                    <option value="11LB" <?php if($hora[1] == '11LB'){ echo 'selected'; } ?> >16:00</option>
                                    <option value="12LB" <?php if($hora[1] == '12LB'){ echo 'selected'; } ?> >17:00</option>
                                    <option value="13LB" <?php if($hora[1] == '13LB'){ echo 'selected'; } ?> >18:00</option>
                                    <option value="14LB" <?php if($hora[1] == '14LB'){ echo 'selected'; } ?> >19:00</option>
                                    <option value="15LB" <?php if($hora[1] == '15LB'){ echo 'selected'; } ?> >20:00</option>
                                    <option value="16LB" <?php if($hora[1] == '16LB'){ echo 'selected'; } ?> >21:00</option>
                                    <option value="17LB" <?php if($hora[1] == '17LB'){ echo 'selected'; } ?> >22:00</option>
                                    <option value="18LB" <?php if($hora[1] == '18LB'){ echo 'selected'; } ?> >23:00</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top:15px;"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <label>MARTES</label>
                            </div>
                            <div class="col-md-5">
                                <select name="martesA" id="martesA" class="form-control">
                                    <option value="0MA" <?php if($hora[2] == '0MA'){ echo 'selected'; } ?> >Sin Atención</option>
                                    <option value="1MA" <?php if($hora[2] == '1MA'){ echo 'selected'; } ?> >6:00</option>
                                    <option value="2MA" <?php if($hora[2] == '2MA'){ echo 'selected'; } ?> >7:00</option>
                                    <option value="3MA" <?php if($hora[2] == '3MA'){ echo 'selected'; } ?> >8:00</option>
                                    <option value="4MA" <?php if($hora[2] == '4MA'){ echo 'selected'; } ?> >9:00</option>
                                    <option value="5MA" <?php if($hora[2] == '5MA'){ echo 'selected'; } ?> >10:00</option>
                                    <option value="6MA" <?php if($hora[2] == '6MA'){ echo 'selected'; } ?> >11:00</option>
                                    <option value="7MA" <?php if($hora[2] == '7MA'){ echo 'selected'; } ?> >12:00</option>
                                    <option value="8MA" <?php if($hora[2] == '8MA'){ echo 'selected'; } ?> >13:00</option>
                                    <option value="9MA" <?php if($hora[2] == '9MA'){ echo 'selected'; } ?> >14:00</option>
                                    <option value="10MA" <?php if($hora[2] == '10MA'){ echo 'selected'; } ?> >15:00</option>
                                    <option value="11MA" <?php if($hora[2] == '11MA'){ echo 'selected'; } ?> >16:00</option>
                                    <option value="12MA" <?php if($hora[2] == '12MA'){ echo 'selected'; } ?> >17:00</option>
                                    <option value="13MA" <?php if($hora[2] == '13MA'){ echo 'selected'; } ?> >18:00</option>
                                    <option value="14MA" <?php if($hora[2] == '14MA'){ echo 'selected'; } ?> >19:00</option>
                                    <option value="15MA" <?php if($hora[2] == '15MA'){ echo 'selected'; } ?> >20:00</option>
                                    <option value="16MA" <?php if($hora[2] == '16MA'){ echo 'selected'; } ?> >21:00</option>
                                    <option value="17MA" <?php if($hora[2] == '17MA'){ echo 'selected'; } ?> >22:00</option>
                                    <option value="18MA" <?php if($hora[2] == '18MA'){ echo 'selected'; } ?> >23:00</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select name="martesB" id="martesB" class="form-control">
                                    <option value="0MB">Sin Atención</option>
                                    <option value="1MB">6:00</option>
                                    <option value="2MB">7:00</option>
                                    <option value="3MB">8:00</option>
                                    <option value="4MB">9:00</option>
                                    <option value="5MB">10:00</option>
                                    <option value="6MB">11:00</option>
                                    <option value="7MB">12:00</option>
                                    <option value="8MB">13:00</option>
                                    <option value="9MB">14:00</option>
                                    <option value="10MB">15:00</option>
                                    <option value="11MB">16:00</option>
                                    <option value="12MB">17:00</option>
                                    <option value="13MB">18:00</option>
                                    <option value="14MB">19:00</option>
                                    <option value="15MB">20:00</option>
                                    <option value="16MB">21:00</option>
                                    <option value="17MB">22:00</option>
                                    <option value="18MB">23:00</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-12" style="margin-top:15px;"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <label>MIÉRCOLES</label>
                            </div>
                            <div class="col-md-5">
                                <select name="miercolesA" id="miercolesA" class="form-control">
                                    <option value="0MMA">Sin Atención</option>
                                    <option value="1MMA">6:00</option>
                                    <option value="2MMA">7:00</option>
                                    <option value="3MMA">8:00</option>
                                    <option value="4MMA">9:00</option>
                                    <option value="5MMA">10:00</option>
                                    <option value="6MMA">11:00</option>
                                    <option value="7MMA">12:00</option>
                                    <option value="8MMA">13:00</option>
                                    <option value="9MMA">14:00</option>
                                    <option value="10MMA">15:00</option>
                                    <option value="11MMA">16:00</option>
                                    <option value="12MMA">17:00</option>
                                    <option value="13MMA">18:00</option>
                                    <option value="14MMA">19:00</option>
                                    <option value="15MMA">20:00</option>
                                    <option value="16MMA">21:00</option>
                                    <option value="17MMA">22:00</option>
                                    <option value="18MMA">23:00</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select name="miercolesB" id="miercolesB" class="form-control">
                                    <option value="0MMB">Sin Atención</option>
                                    <option value="1MMB">6:00</option>
                                    <option value="2MMB">7:00</option>
                                    <option value="3MMB">8:00</option>
                                    <option value="4MMB">9:00</option>
                                    <option value="5MMB">10:00</option>
                                    <option value="6MMB">11:00</option>
                                    <option value="7MMB">12:00</option>
                                    <option value="8MMB">13:00</option>
                                    <option value="9MMB">14:00</option>
                                    <option value="10MMB">15:00</option>
                                    <option value="11MMB">16:00</option>
                                    <option value="12MMB">17:00</option>
                                    <option value="13MMB">18:00</option>
                                    <option value="14MMB">19:00</option>
                                    <option value="15MMB">20:00</option>
                                    <option value="16MMB">21:00</option>
                                    <option value="17MMB">22:00</option>
                                    <option value="18MMB">23:00</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" style="margin-top:15px;"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <label>JUEVES</label>
                            </div>
                            <div class="col-md-5">
                                <select name="juevesA" id="juevesA" class="form-control">
                                    <option value="0JA">Sin Atención</option>
                                    <option value="1JA">6:00</option>
                                    <option value="2JA">7:00</option>
                                    <option value="3JA">8:00</option>
                                    <option value="4JA">9:00</option>
                                    <option value="5JA">10:00</option>
                                    <option value="6JA">11:00</option>
                                    <option value="7JA">12:00</option>
                                    <option value="8JA">13:00</option>
                                    <option value="9JA">14:00</option>
                                    <option value="10JA">15:00</option>
                                    <option value="11JA">16:00</option>
                                    <option value="12JA">17:00</option>
                                    <option value="13JA">18:00</option>
                                    <option value="14JA">19:00</option>
                                    <option value="15JA">20:00</option>
                                    <option value="16JA">21:00</option>
                                    <option value="17JA">22:00</option>
                                    <option value="18JA">23:00</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select name="juevesB" id="juevesB" class="form-control">
                                    <option value="0JB">Sin Atención</option>
                                    <option value="1JB">6:00</option>
                                    <option value="2JB">7:00</option>
                                    <option value="3JB">8:00</option>
                                    <option value="4JB">9:00</option>
                                    <option value="5JB">10:00</option>
                                    <option value="6JB">11:00</option>
                                    <option value="7JB">12:00</option>
                                    <option value="8JB">13:00</option>
                                    <option value="9JB">14:00</option>
                                    <option value="10JB">15:00</option>
                                    <option value="11JB">16:00</option>
                                    <option value="12JB">17:00</option>
                                    <option value="13JB">18:00</option>
                                    <option value="14JB">19:00</option>
                                    <option value="15JB">20:00</option>
                                    <option value="16JB">21:00</option>
                                    <option value="17JB">22:00</option>
                                    <option value="18JB">23:00</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" style="margin-top:15px;"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <label>VIERNES</label>
                            </div>
                            <div class="col-md-5">
                                <select name="viernesA" id="viernesA" class="form-control">
                                    <option value="0VA">Sin Atención</option>
                                    <option value="1VA">6:00</option>
                                    <option value="2VA">7:00</option>
                                    <option value="3VA">8:00</option>
                                    <option value="4VA">9:00</option>
                                    <option value="5VA">10:00</option>
                                    <option value="6VA">11:00</option>
                                    <option value="7VA">12:00</option>
                                    <option value="8VA">13:00</option>
                                    <option value="9VA">14:00</option>
                                    <option value="10VA">15:00</option>
                                    <option value="11VA">16:00</option>
                                    <option value="12VA">17:00</option>
                                    <option value="13VA">18:00</option>
                                    <option value="14VA">19:00</option>
                                    <option value="15VA">20:00</option>
                                    <option value="16VA">21:00</option>
                                    <option value="17VA">22:00</option>
                                    <option value="18VA">23:00</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select name="viernesB" id="viernesB" class="form-control">
                                    <option value="0VB">Sin Atención</option>
                                    <option value="1VB">6:00</option>
                                    <option value="2VB">7:00</option>
                                    <option value="3VB">8:00</option>
                                    <option value="4VB">9:00</option>
                                    <option value="5VB">10:00</option>
                                    <option value="6VB">11:00</option>
                                    <option value="7VB">12:00</option>
                                    <option value="8VB">13:00</option>
                                    <option value="9VB">14:00</option>
                                    <option value="10VB">15:00</option>
                                    <option value="11VB">16:00</option>
                                    <option value="12VB">17:00</option>
                                    <option value="13VB">18:00</option>
                                    <option value="14VB">19:00</option>
                                    <option value="15VB">20:00</option>
                                    <option value="16VB">21:00</option>
                                    <option value="17VB">22:00</option>
                                    <option value="18VB">23:00</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" style="margin-top:15px;"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <label>SÁBADO</label>
                            </div>
                            <div class="col-md-5">
                                <select name="sabadoA" id="sabadoA" class="form-control">
                                    <option value="0SA">Sin Atención</option>
                                    <option value="1SA">6:00</option>
                                    <option value="2SA">7:00</option>
                                    <option value="3SA">8:00</option>
                                    <option value="4SA">9:00</option>
                                    <option value="5SA">10:00</option>
                                    <option value="6SA">11:00</option>
                                    <option value="7SA">12:00</option>
                                    <option value="8SA">13:00</option>
                                    <option value="9SA">14:00</option>
                                    <option value="10SA">15:00</option>
                                    <option value="11SA">16:00</option>
                                    <option value="12SA">17:00</option>
                                    <option value="13SA">18:00</option>
                                    <option value="14SA">19:00</option>
                                    <option value="15SA">20:00</option>
                                    <option value="16SA">21:00</option>
                                    <option value="17SA">22:00</option>
                                    <option value="18SA">23:00</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select name="sabadoB" id="sabadoB" class="form-control">
                                    <option value="0SB">Sin Atención</option>
                                    <option value="1SB">6:00</option>
                                    <option value="2SB">7:00</option>
                                    <option value="3SB">8:00</option>
                                    <option value="4SB">9:00</option>
                                    <option value="5SB">10:00</option>
                                    <option value="6SB">11:00</option>
                                    <option value="7SB">12:00</option>
                                    <option value="8SB">13:00</option>
                                    <option value="9SB">14:00</option>
                                    <option value="10SB">15:00</option>
                                    <option value="11SB">16:00</option>
                                    <option value="12SB">17:00</option>
                                    <option value="13SB">18:00</option>
                                    <option value="14SB">19:00</option>
                                    <option value="15SB">20:00</option>
                                    <option value="16SB">21:00</option>
                                    <option value="17SB">22:00</option>
                                    <option value="18SB">23:00</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" style="margin-top:15px;"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2">
                                <label>DOMINGO</label>
                            </div>
                            <div class="col-md-5">
                                <select name="domingoA" id="domingoA" class="form-control">
                                    <option value="0DA">Sin Atención</option>
                                    <option value="1DA">6:00</option>
                                    <option value="2DA">7:00</option>
                                    <option value="3DA">8:00</option>
                                    <option value="4DA">9:00</option>
                                    <option value="5DA">10:00</option>
                                    <option value="6DA">11:00</option>
                                    <option value="7DA">12:00</option>
                                    <option value="8DA">13:00</option>
                                    <option value="9DA">14:00</option>
                                    <option value="10DA">15:00</option>
                                    <option value="11DA">16:00</option>
                                    <option value="12DA">17:00</option>
                                    <option value="13DA">18:00</option>
                                    <option value="14DA">19:00</option>
                                    <option value="15DA">20:00</option>
                                    <option value="16DA">21:00</option>
                                    <option value="17DA">22:00</option>
                                    <option value="18DA">23:00</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select name="domingoB" id="domingoB" class="form-control">
                                    <option value="0DB">Sin Atención</option>
                                    <option value="1DB">6:00</option>
                                    <option value="2DB">7:00</option>
                                    <option value="3DB">8:00</option>
                                    <option value="4DB">9:00</option>
                                    <option value="5DB">10:00</option>
                                    <option value="6DB">11:00</option>
                                    <option value="7DB">12:00</option>
                                    <option value="8DB">13:00</option>
                                    <option value="9DB">14:00</option>
                                    <option value="10DB">15:00</option>
                                    <option value="11DB">16:00</option>
                                    <option value="12DB">17:00</option>
                                    <option value="13DB">18:00</option>
                                    <option value="14DB">19:00</option>
                                    <option value="15DB">20:00</option>
                                    <option value="16DB">21:00</option>
                                    <option value="17DB">22:00</option>
                                    <option value="18DB">23:00</option>
                                </select>
                            </div>
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
    $("#lunesA").val("'.$hora[0].'");
    $("#lunesB").val("'.$hora[1].'");
    $("#martesA").val("'.$hora[2].'");
    $("#martesB").val("'.$hora[3].'");
    $("#miercolesA").val("'.$hora[4].'");
    $("#miercolesB").val("'.$hora[5].'");
    $("#juevesA").val("'.$hora[6].'");
    $("#juevesB").val("'.$hora[7].'");
    $("#viernesA").val("'.$hora[8].'");
    $("#viernesB").val("'.$hora[9].'");
    $("#sabadoA").val("'.$hora[10].'");
    $("#sabadoB").val("'.$hora[11].'");
    $("#domingoA").val("'.$hora[12].'");
    $("#domingoB").val("'.$hora[13].'");
});
  </script>
';
?>