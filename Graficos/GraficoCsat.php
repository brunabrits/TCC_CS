<?php

$Nota=array($porcentagem);
$Csat=array($calcsat);
$Cor=array("red","orange","yellow","blue","green");

?>

  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
          for($i=0; $i<=5; $i++)
          {
          ?>
          [ <?php echo $MuitoInsatisfeito[$i] ?>, '<?php echo $Insatisfeito?>', '<?php echo $Neutro[$i] ?>'>, '<?php echo $Satisfeito[$i] ?>', '<?php echo $MuitoSatisfeito[$i] ?>', '<?php echo $Cor[$i] ?>']
          <?php
          }
          ?>
        ]);

        var options = {
          title: 'Gráfico CSAT',
          width:600,
          height:400,
          bar: {groupWidth: "60%"},
          legend: { position: 'none' },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>