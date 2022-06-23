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
  <main>
   <h1 class="title">Gráfico CES</h1>
   
   <div class="info-data">
     <div class="card">
       <div class="head">
         <div>
            <h2>70%</h2>
            <p>Fácil</p>
            <p>Os clientes promotores são os consumidores que
               sua empresa conseguiu fidelizar e que agem como verdadeiros propagadores do seu negócio.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
       
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>20%</h2>
            <p>Difícil</p>
            <p>Eles não estão propensos a fazer reclamações sobre a marca. Apesar disso, eles possivelmente também não serão consumidores frequentes.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>10%</h2>
            <p>Médio</p>
            <p>O cliente detrator é o consumidor que teve uma experiência ruim com uma empresa e possivelmente fará reclamações.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        
     </div> 
   </div>
   </main>
   <div class="cardg">
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
   </div> 
  </body>
</html>
