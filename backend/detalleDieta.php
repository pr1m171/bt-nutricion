<?php include("tblClientes.php"); ?>
<?php include("tblDieta.php"); ?>
<?php include("tblAlimentos.php"); ?>

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
                        <h4 class="page-title"></h4>
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
<h3 style="color:#eb5a2c; font-weight: bold;">DETALLE:</h3><br>
        <div class="row">
            <div class="col-md-12">
                       <form class="m-t-30" method="POST" id="form" action="index.php?page=adddieta">
                            <div class="row">
                                <div class="col-md-4">

                                        <label for="detalle">Seleccionar detalle</label>
                                        <select class="form-control" id="detalle" name="detalle">
                                            <option value="SUPLEMENTACIÓN">SUPLEMENTACIÓN</option>
                                            <option value="DESAYUNO">DESAYUNO</option>
                                            <option value="MEDIA MAÑANA">MEDIA MAÑANA</option>
                                            <option value="ALMUERZO">ALMUERZO</option>
                                            <option value="MERIENDA">MERIENDA</option>
                                            <option value="CENA">CENA</option>
                                        </select>
                                        <br>

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
                                        <input type="hidden" value="<?php echo getCampoDieta($_GET['id'], 'hora'); ?>" id="hora" name="hora" />
                                        <input type="hidden" value="<?php echo getCampoDieta($_GET['id'], 'idPaciente'); ?>" name="usuario" id="usuario">

                                        <input type="hidden" value="<?php echo $ids; ?>" name="ids" id="ids" />
                                        
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
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

        $("#add").click(function(e){
            e.preventDefault();
            var url = "https://btnutricion.com/backend/getAlimentos.php?id=" + $( "#alimento option:selected" ).val();
            
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
