<?php
include 'conexao.php';


$Nota=array($porcentagem);
$Nps=array($calnps);
$Cor=array("red","yellow","green");

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Sales');
        data.addRows([
          ['April',2],
          ['May',  2],
          ['June', 2],
          ['July', 2],
          ['April',2]
        ]);

        var options = {
          title: 'Gráfico CES',
          width:600,
          height:400,
          bar: {groupWidth: "60%"},
          legend: { position: 'none' },
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>