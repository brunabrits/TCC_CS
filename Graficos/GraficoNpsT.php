<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/graficosNpsT.css"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Promotores',     7],
          ['Detratores',        1],
          ['Neutros',     2]
        ]);

        var options = {
          title: 'Grafico NPS',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
   <main>

   <h1 class="title">Gráfico NPS</h1>
   <!--<ul class="breadcrumbs">
      <li><a href="#">Home</a></li>
      <li class="divider"></li>
      <li><a href="#" class="active">Grafico NPS</a></li>
   </ul>-->
   <div class="info-data">
     <div class="card">
       <div class="head">
         <div>
            <h2>70%</h2>
            <p>Promotores</p>
            <p>Os clientes promotores são os consumidores que
               sua empresa conseguiu fidelizar e que agem como verdadeiros propagadores do seu negócio.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        <!-- <span class="progress" data-value="50"></span>
        <span class="label">50%</span> -->
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>20%</h2>
            <p>Neutros</p>
            <p>Eles não estão propensos a fazer reclamações sobre a marca. Apesar disso, eles possivelmente também não serão consumidores frequentes.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        <!-- <span class="progress" data-value="50"></span>
        <span class="label">50%</span> -->
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>10%</h2>
            <p>Detratores</p>
            <p>O cliente detrator é o consumidor que teve uma experiência ruim com uma empresa e possivelmente fará reclamações.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        <!-- <span class="progress" data-value="50"></span>
        <span class="label">50%</span> -->
     </div> 
   </div>
   </main>

    <div class="cardg">
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
    </div>
  </body>
</html>
