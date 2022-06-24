<?php

$objeto = new GraficosDao();

$Res_mf = $objeto->buscarmf('mf'). "<br>";
// print_r('Muito Fácil = ' . $Res_mf);

$Res_f = $objeto->buscarf('f'). "<br>";
// print_r('Fácil = ' . $Res_f);

$Res_n = $objeto->buscarn('n'). "<br>";
// print_r('Neutro = ' . $Res_n);

$Res_d = $objeto->buscard('d'). "<br>";
// print_r('Difícil = ' . $Res_d);

$Res_md = $objeto->buscarmd('md'). "<br>";
// print_r('Muito Difícil = ' . $Res_md);

$mtfacil = intval($Res_mf);
$facil = intval($Res_f);
$neutro = intval($Res_n);
$dificil = intval($Res_d);
$mtdificil = intval($Res_md);


$Qnt = (($mtfacil*1) + ($facil*2) + ($neutro*3) + ($dificil*4) + ($mtdificil*5));

$Total = $mtfacil + $facil + $neutro + $dificil + $mtdificil;


try{
  $Ces = $Qnt / $Total;
  // print_r('Nota CES = ' . number_format($Ces, 2, ',','.'));
}


catch(DivisionByZeroError $e){
  echo "Não há dados suficientes para gerar o Gráfico de CES";
}

  class GraficosDao{

    public $resultado, $mtfacil, $facil, $neutros, $dificil, $mtdificil;

    public function buscarmf($mtfacil){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_ces_mf) AS '{$mtfacil}' FROM ces";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$mtfacil];
    }

    public function buscarf($facil){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_ces_f) AS '{$facil}' FROM ces";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$facil];
    }

    public function buscarn($neutros){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_ces_n) AS '{$neutros}' FROM ces";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$neutros];
    }

    public function buscard($dificil){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_ces_d) AS '{$dificil}' FROM ces";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$dificil];
    }

    public function buscarmd($mtdificil){
    
      include_once '../Cadastro/conexao.php';
      $bd = new Conexao();
      $con = $bd->getConexao();
      $sql = "SELECT SUM(Tp_ces_md) AS '{$mtdificil}' FROM ces";
      $stm = $con->prepare($sql);
      $stm->execute();
      $resultado = $stm->fetch(PDO::FETCH_ASSOC);
      return $resultado[$mtdificil];
    }
    
  }

$TCliente=array("Muito Facíl","Facíl", "Neutros", "Difícil", "Muito Difícil");
$Resultado=array($mtfacil, $facil, $neutro, $dificil, $mtdificil);

?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/graficoCesT.css"/>  
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
          title: 'Gráfico CES',
          // colors: ['#00FF00','#7CFC00','yellow', '(139,0,0)', '#FF0000']
          colors: ['rgb(92, 255, 230)', 'rgb(75,0,130)', '#0063FC'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

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
            <h2>icon face</h2>
            <p>Muito Fácil</p>
            <p>O cliente teve muita facilidade ao utilizar seu produto.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
       
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>icon face</h2>
            <p>Fácil</p>
            <p>O cliente teve facilidade ao utilizar seu produto.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>icon face</h2>
            <p>Neutro</p>
            <p>O cliente teve esforço razoável ao utilizar seu produto.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>icon face</h2>
            <p>Difícil</p>
            <p>O cliente teve dificuldade ao utilizar seu produto.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        
     </div> 
     <div class="card">
       <div class="head">
         <div>
            <h2>icon face</h2>
            <p>Muito Difícil</p>
            <p>O cliente teve muita dificuldade ao utilizar seu produto.</p>
         </div>
         <i class="bx-bx-trending-up"></i>
        </div> 
        
     </div> 
   </div>
   </main>
   <div class="juntar">
   <div class="cardg">
    <div id="piechart" style="width: 1000px; height: 500px;"></div>
   </div> 
   <div class="legenda">
   <?php
   $objeto = new GraficosDao();

   
   print_r('Muito Fácil = ' . $Res_mf);
  
   print_r('Fácil = ' . $Res_f);
  
   print_r('Neutro = ' . $Res_n);
  
   print_r('Difícil = ' . $Res_d);
   
   $Res_md = $objeto->buscarmd('md'). "<br>";
   print_r('Muito Difícil = ' . $Res_md);
   
   $mtfacil = intval($Res_mf);
   $facil = intval($Res_f);
   $neutro = intval($Res_n);
   $dificil = intval($Res_d);
   $mtdificil = intval($Res_md);
   
   
   $Qnt = (($mtfacil*1) + ($facil*2) + ($neutro*3) + ($dificil*4) + ($mtdificil*5));
   
   $Total = $mtfacil + $facil + $neutro + $dificil + $mtdificil;
   
   
  //  try{
  //    $Ces = $Qnt / $Total;
     print_r('Nota CES = ' . number_format($Ces, 2, ',','.'));
  //  }
   ?>
   </div>
   </div>
  </body>
</html>
