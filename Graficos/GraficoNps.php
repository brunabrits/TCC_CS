<?php

$objeto = new GraficosDao();

$Res_p = $objeto->buscarp('promotores'). "<br>";
print_r('Promotores = ' . $Res_p);

$Res_n = $objeto->buscarn('neutros'). "<br>";
print_r('Neutros = ' . $Res_n);

$Res_d = $objeto->buscard('detratores'). "<br>";
print_r('Detratores = ' . $Res_d);

$promotor=intval($Res_d);
$neutro=intval($Res_n);
$detrator=intval($Res_p);

$Total = $neutro + $promotor + $detrator;


try {
  $Calculo = (($detrator - $promotor ) / $Total);
  $Nps = $Calculo * 100;
  print_r('Nota NPS = ' . number_format($Nps, 1, ',','.'));
}

catch(DivisionByZeroError $e){
  echo "Não há dados suficientes para gerar o Gráfico de NPS";
}

  class GraficosDao{

    public $resultado, $detratores, $neutros, $promotores;

    public function buscarp($promotores){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_nps_promotor) AS '{$promotores}' FROM nps";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$promotores];
    }

    public function buscarn($neutros){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_nps_neutro) AS '{$neutros}' FROM nps";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$neutros];
    }

    public function buscard($detratores){
    
      include_once '../Cadastro/conexao.php';
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
          colors: ['#00008B','#DAA520','#800000']
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 1200px; height: 700px;"></div>
  </body>
</html>