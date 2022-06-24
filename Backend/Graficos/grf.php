<?php

$objeto = new GraficosDao();

$Res_d = $objeto->buscar("d");
print_r('resultado contadordetratores = ' . $Res_d);

// $Res_n = $objeto->buscar("n");
// print_r($Res_n);

// $Res_p = $objeto->buscar("p");
// print_r($Res_p);




  class GraficosDao{

    public $resultado;

    public function buscar($Tipo){
    
      include_once '../../Database/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();

      $sql = "";
      if ($Tipo == 'd')
      {
        $sql = "select count(*) as contadordetratores from nps where nps between 0 and 6";
      }

      if ($Tipo == 'n')
      {
        $sql = "select count(*) as contadorneutro from nps where nps between 7 and 8";
      }

    if ($Tipo == 'p')
      {
        $sql = "select count(*) as contadorpromotores from nps where nps between 9 and 10";
      }    


      //$resul = $conexao->query($sql);
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado['contadordetratores'];
  }

}


$TCliente=array("Promotores","Neutros","Detratores");
$Resultados=array($Res_d, 5, 1);
$Cor=array("red","yellow","green");
?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Resultados", { role: "style" } ],
        <?php
        for ($i=0; $i<=2; $i++)
        {
        ?>  
          [' <?php echo $TCliente[$i] ?>', <?php echo $Resultados[$i] ?>, '<?php echo $Cor[$i] ?>'],
        <?php  
        }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Grafico NPS",
        width: 600,
        height: 400,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>