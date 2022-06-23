<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/graficoCesT.css"/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Sales');
        data.addRows([
          ['Facil',  7],
          ['Dificil',2],
          ['Medio',  1]
        ]);

        var options = {
          title: 'Grafico CES',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 50%; height: auto;"></div>
  </body>
</html>
