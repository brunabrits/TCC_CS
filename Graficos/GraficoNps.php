<?php

$sql=("");
$Nota=array($porcentagem);
$Nps=array($calnps);
$Cor=array("red","yellow","green");

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nps', 'Promotores', 'Detratores', { role: "style" } ],
          <?php
          for($i=0; $i<=3; $i++)
          {
          ?>
          [ <?php echo $Nps[$i] ?>, '<?php echo $Promotores?>', '<?php echo $Detratores[$i] ?>'>, '<?php echo $Cor[$i] ?>'],
          <?php
          }
          ?>
        ]);

        var options = {
          title: 'Gráfico NPS',
          width:600,
          height:400,
          bar: {groupWidth: "60%"},
          legend: { position: 'none' },
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_values'));

        chart.draw(view, options);
      }
    </script>

  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>