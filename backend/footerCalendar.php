 <!-- FullCalendar -->
    <script>
      $(window).on("load",function(){
        var lastID = "";
        var date = new Date(),
            d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear(),
            started,
            categoryClass;

        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          dayClick: function(date, jsEvent, view) {

            
            var fecha = date.format("DD") + "/" + date.format("MM") + "/" + date.format("YYYY");

            var hora = date.format("HH") + ":" + date.format("mm");
            var ids= hora + "id" + fecha;
            var event={id:ids , title: 'Seleccionando turno, da click aqui para configurar \n Fecha: ' + fecha + ' Hora: ' + hora, start: date.format(), url: 'index.php?page=nuevoturno&hora=' + hora + '&fecha=' + fecha};

            $('#calendar').fullCalendar( 'renderEvent', event, true);


            if(lastID == ""){

            }else{
                $('#calendar').fullCalendar( 'removeEvents' , lastID  );
            }
              lastID = event.id;

          },
          defaultView: 'agendaWeek',
          lang: 'es',
          selectable: false,
          selectHelper: true,
            minTime: "08:00:00",
            maxTime: "21:00:00",
            businessHours: {
              start: '07:00', // hora final
                  end: '20:00', // hora inicial
                  dow: [ 1, 2, 3, 4, 5,6 ] // dias de semana, 0=Domingo
          },

          select: function(start, end, allDay) {
            $('#fc_create').click();

            started = start;
            ended = end;

            $(".antosubmit").on("click", function() {
              var title = $("#title").val();
              if (end) {
                ended = end;
              }

              categoryClass = $("#event_type").val();

              if (title) {
                calendar.fullCalendar('renderEvent', {
                    title: title,
                    start: started,
                    end: end,
                    allDay: allDay
                  },
                  true // make the event "stick"
                );
              }

              $('#title').val('');

              calendar.fullCalendar('unselect');

              $('.antoclose').click();

              return false;
            });
          },
          editable: false,

          events: [<?php




$mysql = new conex_mysql();
$mysql->conectar();
$mysql_result = $mysql->consulta('select turnos.fecha, turnos.estado, turnos.hora, turnos.consultorioid, turnos.medicoid, nutricionista.email, nutricionista.nombre, nutricionista.apellido, turnos.id as idt, clientes.id as idp, clientes.nombre as npaciente, nutricionista.id from turnos inner join nutricionista on turnos.medicoid=nutricionista.id inner join clientes on turnos.pacienteid=clientes.id where nutricionista.id=1');

$result = $mysql_result;


if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {

    $fecha = explode("/",$row['fecha']);
    $hora = explode(":",$row['hora']);
    $mes = $fecha[1] -1;

    $horas = $hora[0] + 1;

    $usuario = $row['nombre'] . " " . $row['apellido'];
    if($row['estado'] == "finalizado"){

    }else{
      echo "
      {
        title: '".$row['npaciente']. "',
        start: new Date(".$fecha[2].", ".$mes.", ".$fecha[0].", ".$hora[0].",".$hora[1].",00),
        end: new Date(".$fecha[2].", ".$mes.", ".$fecha[0].", ".$horas.",".$hora[1].",00),
        backgroundColor: '#413f3f',
        borderColor: '#413f3f',
        url: 'index.php?page=turno&id=".$row['idt']."'
      },
    ";

    }
    
  }

  

}


$mysql->salir();
?>
],
locale: 'es'
        });
      });







    </script>
    <!-- /FullCalendar -->
