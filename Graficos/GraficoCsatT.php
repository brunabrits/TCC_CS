<head>
    <link rel="stylesheet" type="text/css" href="css/graficoCsatT.css"/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Insatisfeito',      1],
          ['Muito Insatisfeito',     6],
          ['Indiferente',           1],
          ['Muito Satisfeito',      1],
          ['Satisfeito',    1]
        ]);

        var options = {
          title: 'Gráfico CSAT'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <main>

<h1 class="title">Gráfico CSAT</h1>
<!--<ul class="breadcrumbs">
   <li><a href="#">Home</a></li>
   <li class="divider"></li>
   <li><a href="#" class="active">Grafico NPS</a></li>
</ul>-->
<div class="info-data">
  <div class="card">
    <div class="head">
      <div>
         <h2>60%</h2>
         <p>Muito Insatisfeito</p>
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
         <h2>10%</h2>
         <p>Insatisfeito</p>
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
         <p>Indiferente</p>
         <p>O cliente detrator é o consumidor que teve uma experiência ruim com uma empresa e possivelmente fará reclamações.</p>
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
         <p>Satisfeito</p>
         <p>O cliente detrator é o consumidor que teve uma experiência ruim com uma empresa e possivelmente fará reclamações.</p>
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
         <p>Muito Satisfeito</p>
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
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</div>  
  </body>
</html>