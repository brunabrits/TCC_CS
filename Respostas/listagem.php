<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!--Link das fontes Material Icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <title>Meus Clientes</title>
</head>

<body>

  <nav>
    <div class="nav-wrapper purple darken-4">
      <a href="#" class="brand-logo center">Meus Clientes</a>

      <ul id="nav-mobile" class="left hide-on-med-and-down">

        <li><a href="../includes/telaLogin/painelTeste.php">Home</a></li>
        <li><a href="badges.html">Dashboards</a></li>
        <li><a href="">Pesquisas</a></li>

      </ul>

    </div>
  </nav>

  <?php

  include 'class_respostas.php';
  include 'respostasDao.php';

  $respostas = new Respostas();
  $respostasDao = new RespostasDao();
  
?>
  <section class="tabela">

    <table class="striped centered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Resposta</th>
          <th>Email</th>
          <th>Data de Nascimento</th>
          <th>Tipo da Pesquisa</th>
        </tr>
      </thead>

      <tbody>
        <?php 
        if(is_array($respostasDao->Buscar($respostas)) || is_object($respostasDao->Buscar($respostas))){
        foreach($respostasDao->Buscar($respostas) as $resultados) : ?>
          <tr>
            <td><?= $resultados['Id_resposta']?></td>
            <td><?= $resultados['Vlr_resposta']?></td>
            <td><?= $resultados['Email_resposta']?></td>
            <td><?= date('d/m/Y', strtotime($resultados['Dt_nasc']))?></td>
            <td><?= $resultados['fk_Id_pergunta']?></td>
          </tr>
        <?php endforeach; 
        }else{
          
        }
        ?>

      </tbody>

    </table>

  </section>

</body>

</html>