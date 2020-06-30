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
            left: '',
            center: '',
            right: ''
          },
          defaultDate: '2020-01-01',
          columnHeaderFormat: 'dddd',
          dayClick: function(date, jsEvent, view) {

            
            var fecha = date.format("DD") + "/" + date.format("MM") + "/" + date.format("YYYY");

            var hora = date.format("HH") + ":" + date.format("mm");
            var dia = date.format('dddd');
            var ids= hora + "id" + fecha;

            var event={id:ids , title: 'Asignar alimento a la dieta: \n Hora: ' + hora, start: date.format(), url: 'index.php?page=agregaralimento&hora=' + hora + '&fecha=' + fecha + "&dia=" + dia + "&usuario=" + <?php echo $_GET['id']; ?>};

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
            minTime: "04:00:00",
            maxTime: "24:00:00",
            businessHours: {
              start: '04:00', // hora final
                  end: '24:00', // hora inicial
                  dow: [ 0,1, 2, 3, 4, 5, 6 ] // dias de semana, 0=Domingo
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
$mysql_result = $mysql->consulta("select * from dieta where idPaciente='".$_GET['id']."'");

$result = $mysql_result;


if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {

    $fecha = explode("/",$row['fecha']);
    $hora = explode(":",$row['hora']);
    $mes = $fecha[1] -1;

    $horas = $hora[0] + 1;


      echo "
      {
        title: '".$row['detalle']. "',
        start: new Date(".$fecha[2].", ".$mes.", ".$fecha[0].", ".$hora[0].",".$hora[1].",00),
        end: new Date(".$fecha[2].", ".$mes.", ".$fecha[0].", ".$horas.",".$hora[1].",00),
        backgroundColor: '#413f3f',
        borderColor: '#413f3f',
        url: 'index.php?page=detalledieta&id=".$row['id']."'
      },
    ";

    

  }
}


$mysql->salir();
?>
],
locale: 'es'
        });
      });







    </script>