<?php

$objeto = new GraficosDao();

$Res_mts = $objeto->buscarmts('mts'). "<br>";
print_r('Muito Satisfeito = ' . $Res_mts);

$Res_s = $objeto->buscars('s'). "<br>";
print_r('Satisfeito = ' . $Res_s);

$Res_n = $objeto->buscarn('n'). "<br>";
print_r('Neutro = ' . $Res_n);

$Res_i = $objeto->buscari('i'). "<br>";
print_r('Insatisfeito = ' . $Res_i);

$Res_mti = $objeto->buscarmti('mti'). "<br>";
print_r('Muito Insatisfeito = ' . $Res_mti);

$mtsatisfeito = intval($Res_mts);
$satisfeito = intval($Res_s);
$neutro = intval($Res_n);
$insatisfeito = intval($Res_i);
$mtinsatisfeito = intval($Res_mti);

$Total = $mtsatisfeito + $satisfeito + $neutro + $insatisfeito + $mtinsatisfeito;
  
try{
  $Calculo = (($mtsatisfeito + $satisfeito) / $Total);
  $Csat = $Calculo * 100;
  print_r('Nota CSAT = ' . number_format($Csat, 1, ',','.'));
}

catch(DivisionByZeroError $e){
  echo "Não há dados suficientes para gerar o Gráfico de CSAT";
}

  class GraficosDao{

    public $resultado, $mtsatisfeitos, $satisfeitos, $neutros, $insatisfeitos, $mtinsatisfeitos;

    public function buscarmts($mtsatisfeitos){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_mts) AS '{$mtsatisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$mtsatisfeitos];
    }

    public function buscars($satisfeitos){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_s) AS '{$satisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$satisfeitos];
    }

    public function buscarn($neutros){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_n) AS '{$neutros}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$neutros];
    }

    public function buscari($insatisfeitos){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_i) AS '{$insatisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$insatisfeitos];
    }

    public function buscarmti($mtinsatisfeitos){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_csat_mti) AS '{$mtinsatisfeitos}' FROM csat";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$mtinsatisfeitos];
    }
    
  }

$TCliente=array("Muito Satisfeitos","Satisfeitos", "Neutros", "Insatisfeito", "Muito Insatisfeito");
$Resultado=array($mtsatisfeito, $satisfeito, $neutro, $insatisfeito, $mtinsatisfeito);

?>

<html>
  <head>
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
          colors: ['#00FF00','#7CFC00','yellow', '(139,0,0)', '#FF0000']
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 1200px; height: 700px;"></div>
  </body>
</html>