<?php

include 'Conexaopesquisas.php';

class GraficosDao{
  
	public function buscar(){

		$sqld = "select count(*) from nps where nps between 0 and 6";
    $sqln = "select count(*) from nps where nps between 7 and 8";
    $sqlp = "select count(*) from nps where nps between 9 and 10";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stmd = $con->prepare($sqld);
    $stmn = $con->prepare($sqln);
    $stmp = $con->prepare($sqlp);
		$stmd->execute();
    $stmn->execute();
    $stmp->execute();
		if($stmd->rowCount()>0){
		$resultadod = $stmd->fetchAll(\PDO::FETCH_ASSOC);
		return $resultadod;
		}
    if($stmn->rowCount()>0){
      $resultadon = $stmn->fetchAll(\PDO::FETCH_ASSOC);
      return $resultadon;
      }
      if($stmp->rowCount()>0){
        $resultadop = $stmp->fetchAll(\PDO::FETCH_ASSOC);
        return $resultadop;
        }

	}

}


$TCliente=array("Promotores","Neutros","Detratores");
$Resultados=array($resultadop, $resultadon, $resultadod);
$Cor=array("red","yellow","green");

?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);


      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Resultados', { role: "style" }],
          <?php
          for($i=0; $i<=2; $i++)
          {
          ?>
          [ <?php echo $TCliente[$i] ?>, '<?php echo $Resultados[$i]?>', '<?php echo $Cor[$i] ?>'],
          <?php
          }
          ?>
        ]);

        var options = {
          title: 'Gráfico CSAT',
          width:600,
          height:400,
          bar: {groupWidth: "60%"},
          legend: { position: 'none' },
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