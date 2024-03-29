<?php

$objeto = new GraficosDao();

$Res_mts = $objeto->buscarmts('mts'). "<br>";
// print_r('Muito Satisfeito = ' . $Res_mts);

$Res_s = $objeto->buscars('s'). "<br>";
// print_r('Satisfeito = ' . $Res_s);

$Res_n = $objeto->buscarn('n'). "<br>";
// print_r('Neutro = ' . $Res_n);

$Res_i = $objeto->buscari('i'). "<br>";
// print_r('Insatisfeito = ' . $Res_i);

$Res_mti = $objeto->buscarmti('mti'). "<br>";
// print_r('Muito Insatisfeito = ' . $Res_mti);

$mtsatisfeito = intval($Res_mts);
$satisfeito = intval($Res_s);
$neutro = intval($Res_n);
$insatisfeito = intval($Res_i);
$mtinsatisfeito = intval($Res_mti);

$Total = $mtsatisfeito + $satisfeito + $neutro + $insatisfeito + $mtinsatisfeito;
  
try{
  $Calculo = (($mtsatisfeito + $satisfeito) / $Total);
  $Csat = $Calculo * 100;
  // print_r('Nota CSAT = ' . number_format($Csat, 1, ',','.'));
}

catch(DivisionByZeroError $e){
  echo "Não há dados suficientes para gerar o Gráfico de CSAT";
}

  class GraficosDao{

    public $resultado, $mtsatisfeitos, $satisfeitos, $neutros, $insatisfeitos, $mtinsatisfeitos;

    public function buscarmts($mtsatisfeitos){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_mts) AS '{$mtsatisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$mtsatisfeitos];
    }

    public function buscars($satisfeitos){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_s) AS '{$satisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$satisfeitos];
    }

    public function buscarn($neutros){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_n) AS '{$neutros}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$neutros];
    }

    public function buscari($insatisfeitos){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_i) AS '{$insatisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$insatisfeitos];
    }

    public function buscarmti($mtinsatisfeitos){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_mti) AS '{$mtinsatisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$mtinsatisfeitos];
    }
    
  }

$TCliente=array("Muito Satisfeito","Satisfeito", "Indiferente", "Insatisfeito", "Muito Insatisfeito");
$Resultado=array($mtsatisfeito, $satisfeito, $neutro, $insatisfeito, $mtinsatisfeito);

?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/graficoCsatT.css"/>  
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Resultado'],
          <?php
        for ($i=0; $i<=4; $i++)
        {
        ?>  
          [' <?php echo $TCliente[$i] ?>', <?php echo $Resultado[$i] ?>],
        <?php  
        }
        ?>
        ]);

        var options = {
          title: 'Grafico CSAT',
          // colors: ['#00FF00','#7CFC00','yellow', '(139,0,0)', '#FF0000']
          colors: ['rgb(92, 255, 230)','#3FD3FF', '#0063FC', '#8A3FFF', 'rgb(75,0,130)']
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <main>

<h1 class="title">Gráfico CSAT</h1>

<div class="info-data">
  <div class="card">
    <div class="head">
      <div>
      <i class='bx bx-happy-beaming' style='color:5CFFE6'></i>
         <p>Muito Satisfeito</p>
         <p>O cliente está muito satisfeito com a experiência que teve com sua empresa.
         </p>
      </div>
     </div> 
  </div> 
  <div class="card">
    <div class="head">
      <div>
      <i class='bx bx-smile' style='color:3FD3FF'></i>
         <p>Satisfeito</p>
         <p>O cliente está satisfeito com a experiência que teve com sua empresa.</p>
      </div>
     </div> 
  </div> 
  <div class="card">
    <div class="head">
      <div>
      <i class='bx bx-meh-alt' style='color:#0063FC'></i>
         <p>Indiferente</p>
         <p>O cliente está indiferente com a experiência que teve com a empresa</p>
      </div>
     </div> 
  </div> 
  <div class="card">
    <div class="head">
      <div>
      <i class='bx bx-sad' style='color:8A3FFF'></i>
         <p>Insatisfeito</p>
         <p>O cliente está insatisfeito com a experiência que teve com sua empresa.</p>
      </div>
     </div> 
  </div> 
  <div class="card">
    <div class="head">
      <div>
      <i class='bx bx-angry' style='color:#4b0082' ></i>
         <p>Muito Insatisfeito</p>
         <p>O cliente está muito insatisfeito com a experiência que teve com sua empresa.</p>
      </div>
     </div> 
  </div> 
</div>
</main>
<div class="juntar">
<div class="cardg">
    <div id="piechart" style="width: 100%; height: 100%;"></div>
</div>
<div class="legenda">
  <?php
  $objeto = new GraficosDao();

  print_r('Muito Satisfeito = ' . $Res_mts);
 
  print_r('Satisfeito = ' . $Res_s);

  print_r('Indiferente = ' . $Res_n);

  print_r('Insatisfeito = ' . $Res_i);

  print_r('Muito Insatisfeito = ' . $Res_mti);
  
  $mtsatisfeito = intval($Res_mts);
  $satisfeito = intval($Res_s);
  $neutro = intval($Res_n);
  $insatisfeito = intval($Res_i);
  $mtinsatisfeito = intval($Res_mti);
  
  $Total = $mtsatisfeito + $satisfeito + $neutro + $insatisfeito + $mtinsatisfeito;
    
    print_r('Nota CSAT = ' . number_format($Csat, 1, ',','.'));
  
  ?>
</div>
</div>  
  </body>
</html>