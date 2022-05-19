<?php
$Nota=array();
$Nps=array();
$Cor=array();

?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nota',    'Promotores', 'Detratores'],
          <?php
          for($i=0; $i<=3; $i++)
          {
          ?>
          [' <?php echo $Nps[$i] ?>',<?php echo $Nota?>, '<?php echo $Cor[$i] ?>'],
          <?php
          }
          ?>
        ]);

        var options = {
          title: 'Gráfico NPS',
          width:600
          height:400
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>


<!-------------------------------------------------------------------------------------------------------------->


  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     2],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    2]
        ]);

        var options = {
          title: 'CSAT'
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


<!-------------------------------------------------------------------------------------------------->


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
          title: 'CES',
          pieHole: 0.4,
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