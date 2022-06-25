<?php

$objeto = new GraficosDao();

$Res_p = $objeto->buscarp('promotores'). "<br>";
// print_r('Promotores = ' . $Res_p);

$Res_n = $objeto->buscarn('neutros'). "<br>";
// print_r('Neutros = ' . $Res_n);

$Res_d = $objeto->buscard('detratores'). "<br>";
// print_r('Detratores = ' . $Res_d);

$promotor=intval($Res_d);
$neutro=intval($Res_n);
$detrator=intval($Res_p);

$Total = $neutro + $promotor + $detrator;


try {
  $Calculo = (($detrator - $promotor ) / $Total);
  $Nps = $Calculo * 100;
  // print_r('Nota NPS = ' . number_format($Nps, 1, ',','.'));
}

catch(DivisionByZeroError $e){
  echo "Não há dados suficientes para gerar o Gráfico de NPS";
}

  class GraficosDao{

    public $resultado, $detratores, $neutros, $promotores;

    public function buscarp($promotores){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_nps_promotor) AS '{$promotores}' FROM nps";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$promotores];
    }

    public function buscarn($neutros){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_nps_neutro) AS '{$neutros}' FROM nps";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$neutros];
    }

    public function buscard($detratores){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_nps_detrator) AS '{$detratores}' FROM nps";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$detratores];
    }
    
  }

$TCliente=array("Promotores","Neutros","Detratores");
$Resultado=array($detrator, $neutro, $promotor);

?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/graficosNpsT.css"/>  
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Resultados'],
          <?php
        for ($i=0; $i<=2; $i++)
        {
        ?>  
          [' <?php echo $TCliente[$i] ?>', <?php echo $Resultado[$i] ?>],
        <?php  
        }
        ?>
        ]);

        var options = {
          title: 'Gráfico NPS',
          pieHole: 0.4,
          // colors: ['#00008B','#DAA520','#800000']
          colors: ['rgb(92, 255, 230)', '#0063FC','rgb(75,0,130)']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <main>
   <h1 class="title">Gráfico NPS</h1>
   
   <div class="info-data">
   <div class="card" id="card1">
       <div class="head">
         <div>
         <i class='bx bx-smile' style='color:5CFFE6'></i>
            <p>Promotores</p>
            <p>Os clientes promotores são os consumidores que
               sua empresa conseguiu fidelizar e que agem como verdadeiros propagadores do seu negócio.</p>
         </div>
        </div> 
        
     </div> 
     <div class="card" id="card2">
       <div class="head">
         <div>
         <div class="icon">
         <i class='bx bx-meh-alt' style='color:#0063FC'></i>
         </div>
            <p>Neutros</p>
            <p>Eles não estão propensos a fazer reclamações sobre a marca. Apesar disso, eles possivelmente também não serão consumidores frequentes.</p>
         </div>
        </div> 
      
     </div> 
     <div class="card" id="card3">
       <div class="head">
         <div>
         <i class='bx bx-sad' style='color:#4b0082'  ></i>
            <p>Detratores</p>
            <p>O cliente detrator é o consumidor que teve uma experiência ruim com uma empresa e possivelmente fará reclamações.</p>
         </div>
        </div> 
        
     </div> 
   </div>
   </main>
   <div class="juntar">
     <div class="cardg">
       <div id="donutchart" style="width: 100%; height: 100%;"></div>
    </div> 
    <div class="legenda">
      <?php
      $objeto = new GraficosDao();

      print_r('Promotores = ' . $Res_p);
      
      print_r('Neutros = ' . $Res_n);
      
      print_r('Detratores = ' . $Res_d);
      
      $promotor=intval($Res_d);
      $neutro=intval($Res_n);
      $detrator=intval($Res_p);
      
      $Total = $neutro + $promotor + $detrator;
      
        print_r('Nota NPS = ' . number_format($Nps, 1, ',','.'));
      
      
      ?>
    </div>
   </div>
  </body>
</html>