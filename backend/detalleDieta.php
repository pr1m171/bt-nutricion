

<?php

    $mysql = new conex_mysql();
    $mysql->conectar();
    $mysql_result = $mysql->consulta('select * from detalle where iddieta="' . $_GET['id'] . '"');


    $result = $mysql_result;

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $ids = $ids . $row['idalimento'] . "/";
        }
    }


    $mysql->salir();
    //echo "IDS: " . $ids;
?>


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
                        <h4 class="page-title">DETALLE</h4>
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
                                    <li class="breadcrumb-item active" aria-current="page">Dieta</li>
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

        <div class="row">
            <div class="col-md-12">
                       <form class="m-t-30" method="POST" id="form" action="index.php?page=editdieta">




                    <div class="row">
                        <div class="col-md-4">



                            <div class="row">
                                <div class="col-md-12 miblock">
                                <div class="row">
                                    <div class="col-md-12"><label><?php echo getCampoCliente(getCampoDieta($_GET['id'], 'idPaciente'), 'nombre'); ?></label></div>

                                    <div class="col-md-12"><label>COMIDA: <?php echo getCampoDieta($_GET['id'], 'detalle'); ?></label></div>
                                    <div class="col-md-12"><label style="text-transform: uppercase;">DIA: <?php echo getCampoDieta($_GET['id'], 'dia'); ?></label></div>
                                    <br>
                                    <div class="col-md-3 cambia"><label for="hora">HORARIO: <r class="ocultar"><?php echo getCampoDieta($_GET['id'], 'hora'); ?></r></label></div>
                                    <div class="col-md-3">
                                            <i class="fas fa-pencil-alt editarHora"></i>
                                            <select class="form-control" id="hora" name="hora" style="width: 80%; margin-top: -8px; margin-left: 5px; display:none;">
                                                <option value="06:00">06:00</option>
                                                <option value="06:30">06:30</option>
                                                <option value="07:00">07:00</option>
                                                <option value="07:30">07:30</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:30">23:30</option>
                                            </select>
                                            <br>
                                    </div>
                                </div>
                                </div>
                            </div>


                        <span style="display:none;"><label for="detalle">Seleccionar tipo de comida</label>
                        <select class="form-control" id="detalle" name="detalle">
                            <option value="SUPLEMENTO" <?php if(getCampoDieta($_GET['id'], 'detalle') == 'SUPLEMENTO'){ echo "selected"; } ?>>SUPLEMENTO</option>
                            <option value="DESAYUNO" <?php if(getCampoDieta($_GET['id'], 'detalle') == 'DESAYUNO'){ echo "selected"; } ?>>DESAYUNO</option>
                            <option value="COMIDA" <?php if(getCampoDieta($_GET['id'], 'detalle') == 'COMIDA'){ echo "selected"; } ?>>COMIDA</option>
                            <option value="ALMUERZO" <?php if(getCampoDieta($_GET['id'], 'detalle') == 'ALMUERZO'){ echo "selected"; } ?>>ALMUERZO</option>
                            <option value="MERIENDA" <?php if(getCampoDieta($_GET['id'], 'detalle') == 'MERIENDA'){ echo "selected"; } ?>>MERIENDA</option>
                            <option value="CENA" <?php if(getCampoDieta($_GET['id'], 'detalle') == 'CENA'){ echo "selected"; } ?>>CENA</option>
                        </select></span>

                                        <label for="usuario">Seleccionar alimento</label>
                                        <select class="form-control" id="alimento" name="alimento">
                                            
                                                                <?php

                                                                    $mysql = new conex_mysql();
                                                                    $mysql->conectar();
                                                                    $mysql_result = $mysql->consulta('select * from alimentos');

                                                                    
                                                                    $result = $mysql_result;

                                                                    if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                      while($row = $result->fetch_assoc()) {
                                                                        ?>
                                                                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?></option>                                                             
        
                                                                        <?php
                                                                      }
                                                                    }
                                                                    

                                                                    $mysql->salir();
                                                                ?>
                                        </select>

                                        <button id="add" class="btn waves-effect waves-light btn-primary float-right">Agregar</button>
                                        <br>


                                        <input type="hidden" value="<?php echo getCampoDieta($_GET['id'], 'fecha'); ?>" id="fecha" name="fecha" />
                                        <input type="hidden" value="<?php echo getCampoDieta($_GET['id'], 'dia'); ?>" id="dia" name="dia" />
                                        <input type="hidden" value="<?php echo getCampoDieta($_GET['id'], 'hora'); ?>" id="hora1" name="hora1" />
                                        <input type="hidden" value="<?php echo getCampoDieta($_GET['id'], 'idPaciente'); ?>" name="usuario" id="usuario">
                                        <input type="hidden" value="<?php echo $_GET['id']; ?>" id="dieta" name="dieta">
                                        <input type="hidden" value="<?php echo $ids; ?>" name="ids" id="ids" />
                                        
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                      <div class="alerta">

                                    <span id="close">x</span>

                                    <h4>Preferencias del cliente:</h4>

                                    <h6> - Alergias: <?php echo getCampoCliente(getCampoDieta($_GET['id'], 'idPaciente'), 'alergias'); ?></h6>
                                    <h6> - Preferidos: <?php echo getCampoCliente(getCampoDieta($_GET['id'], 'idPaciente'), 'preferidos'); ?></h6>
                                    <h6> - Rechazados: <?php echo getCampoCliente(getCampoDieta($_GET['id'], 'idPaciente'), 'alergias'); ?></h6>
                                </div>
                                        <br>
                                        <label>(*)  Estos Valores corresponden a 100 gramos de cada alimento.</label><br>
                                    <table class="tablesaw table-striped table-hover table-bordered table no-wrap tablesaw-columntoggle" id="tabla">
                                        
                                        <thead>
                                            <tr>
                                                <th>Alimento</th>
                                                <th>Calorías</th>
                                                <th>Carbohidratos</th>
                                                <th>Proteínas</th>
                                                <th>Grasas</th>
                                                <th>Fibras</th>
                                                <th>Cantidad Gr.</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody id="lista">



                                        <?php
                                            $mysql = new conex_mysql();
                                            $mysql->conectar();
                                            $mysql_result = $mysql->consulta('select * from detalle where iddieta="' . $_GET['id'] . '"');


                                            $result = $mysql_result;

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                        ?>
                                            <tr data-id="<?php echo $row['idalimento']; ?>">
                                                <td><?php echo getCampoAlimentos($row['idalimento'], 'nombre'); ?></td>
                                                <td><?php echo getCampoAlimentos($row['idalimento'], 'calorias'); ?></td>
                                                <td><?php echo getCampoAlimentos($row['idalimento'], 'hidratos'); ?></td>
                                                <td><?php echo getCampoAlimentos($row['idalimento'], 'proteinas'); ?></td>
                                                <td><?php echo getCampoAlimentos($row['idalimento'], 'grasas'); ?></td>
                                                <td><?php echo getCampoAlimentos($row['idalimento'], 'fibras'); ?></td>
                                                <td><input type="number" class="form-control sumable" value="<?php echo $row['cantidad']; ?>" /></td>
                                                <td>
                                                    <button class='btn btn-danger'><i class='sl-icon-trash'></i></button>
                                                </td>
                                            </tr>

                                        <?php
                                            $totcalorias = $totcalorias + getCampoAlimentos($row['idalimento'], 'calorias');
                                            $tothidratos = $tothidratos + getCampoAlimentos($row['idalimento'], 'hidratos');
                                            $totproteinas = $totproteinas + getCampoAlimentos($row['idalimento'], 'proteinas');
                                            $totgrasas = $totgrasas + getCampoAlimentos($row['idalimento'], 'grasas');
                                            $totfibras = $totfibras + getCampoAlimentos($row['idalimento'], 'fibras');
                                            $totaliza = $totaliza + $row['cantidad'];

                                            }
                                                }


                                                $mysql->salir();
                                                //echo "IDS: " . $ids;
                                        ?>


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Total:</td>
                                                <td id="calorias"><?php echo $totcalorias; ?></td>
                                                <td id="carbohidratos"><?php echo $tothidratos; ?></td>
                                                <td id="proteinas"><?php echo $totproteinas; ?></td>
                                                <td id="grasas"><?php echo $totgrasas; ?></td>
                                                <td id="fibras"><?php echo $totfibras; ?></td>
                                                <td id="totaliza"><?php echo $totaliza; ?></td>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="col-md-11" style="margin-top:15px;">
                                        <button type="submit" class="btn waves-effect waves-light btn-primary float-right">Guardar</button>
                                    </div>    
                            </div>
                        </form>
            </div>

            



        </div>


    </div>
</div>



<?php
$extraScript = '
<style>
tr{
  text-align: center;
}
.alerta{
    background: #daeaf9;
    padding: 10px;
    border-radius: 5px;
}
.alerta span{
    position: absolute;
    top: 2px;
    right: 18px;
    cursor: pointer;
}
</style>
<script>
    $( document ).ready(function() {
        $("#sidebarnav > li:nth-child(4)").addClass("selected");
        $("#sidebarnav > li.sidebar-item.selected > ul").addClass("in");
        $("#activo").addClass("active");
        $("#mis-clientes").addClass("active");
     });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>

        var cal = "'.$totcalorias.'";
        var carbo = "'.$tothidratos.'";
        var prot = "'.$totproteinas.'";
        var gra = "'.$totgrasas.'";
        var fib = "'.$totfibras.'";

        
        var calorias = "'.$totcalorias.'";
        var carbohidratos = "'.$tothidratos.'";
        var proteinas = "'.$totproteinas.'";
        var grasas = "'.$totgrasas.'";
        var fibras = "'.$totfibras.'";

        var ids = "'.$ids.'";


$(document).ready(function () {
      $("#alimento").selectize({
          sortField: "text"
      });

      $("#close").click(function(e){
            e.preventDefault();
            $(".alerta").css("display","none");
      });
      $(".editarHora").click(function(e){
            e.preventDefault();
            $(".ocultar").css("display","none");
            $(".editarHora").css("display","none");
            $("#hora").css("display","block");
            $(".cambia").removeClass("col-md-3");
            $(".cambia").addClass("col-md-2");
      });

      $("#hora").val($("#hora1").val());

        $("#add").click(function(e){
            e.preventDefault();
            var url = "getAlimentos.php?id=" + $( "#alimento option:selected" ).val();
            
            $.get(url, function(data, status){

                var alimento = data.split("/?");
                var nombre = alimento[0];
                var calorias = alimento[1];
                var carbohidratos = alimento[2];
                var proteinas = alimento[3];
                var grasas = alimento[4];
                var fibras = alimento[5];
                ids = ids + alimento[6] + "/";

                var item = "<tr data-id='."'".'"+ alimento[6] +"'."'".'><td>"+nombre+"</td>" + 
                "<td>"+calorias+"</td>" + 
                "<td>"+carbohidratos+"</td>" + 
                "<td>"+proteinas+"</td>" + 
                "<td>"+grasas+"</td>" + 
                "<td>"+fibras+"</td>" +
                "<td><input type='."'number'".' class='."'form-control sumable'".' value='."'100'".' /></td>" + 
                "<td><button class='."'btn btn-danger'".'><i class='."'sl-icon-trash'></i></button>".'</td></tr>";

                $("#lista").append(item);
                
                cal = cal + parseFloat(calorias);
                carbo = carbo + parseFloat(carbohidratos);
                prot = prot + parseFloat(proteinas);
                gra = gra + parseFloat(grasas);
                fib = fib + parseFloat(fibras);
                
                $("#calorias").html(cal);
                $("#carbohidratos").html(carbo);
                $("#proteinas").html(prot);
                $("#grasas").html(gra);
                $("#fibras").html(fib);
                $("#ids").val(ids);

            });

        });

    
  });

  $(document).on("keyup", ".sumable", function (e) {
        var calo = $(this).parent().parent().find("td").eq(1).html();
        var input = $(this).val();
        var sum = 0;
        $(".sumable").each(function(){
        sum += parseFloat($(this).val());
        });
        $("#totaliza").html(sum);
        var caloriasFinal = (input * calo) / 100;
        
    });

    $(document).on("change", ".sumable", function (e) {
        var calo = $(this).parent().parent().find("td").eq(1).html();
        var input = $(this).val();
        var sum = 0;
        $(".sumable").each(function(){
        sum += parseFloat($(this).val());
        });
        $("#totaliza").html(sum);
        var caloriasFinal = (input * calo) / 100;
        
    });

  $(document).on("click", "td button", function (e) {
                e.preventDefault();
                

                calorias = $(this).parent().parent().find("td").eq(1).html();
                carbohidratos = $(this).parent().parent().find("td").eq(2).html();
                proteinas = $(this).parent().parent().find("td").eq(3).html();
                grasas = $(this).parent().parent().find("td").eq(4).html();
                fibras = $(this).parent().parent().find("td").eq(5).html();
                
                


                cal = cal - parseFloat(calorias);
                carbo = carbo - parseFloat(carbohidratos);
                prot = prot - parseFloat(proteinas);
                gra = gra - parseFloat(grasas);
                fib = fib - parseFloat(fibras);


                $("#calorias").html(cal);
                $("#carbohidratos").html(carbo);
                $("#proteinas").html(prot);
                $("#grasas").html(gra);
                $("#fibras").html(fib);

                var idEliminar = $(this).parent().parent().attr("data-id");

                $(this).parent().parent().remove();

                var id = ids.split("/");
                var newids = "";
                $.each(id, function (ind, elem) { 
                  if(elem != idEliminar && elem != null && elem != ""){
                    
                            newids = newids + elem + "/";
                        
                  }
                }); 
                
                ids = newids;

                $("#ids").val(ids);                

            });
  </script>
';
?>
