<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/telacadastrado.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Seja bem vindo ao Sistema</h1>

    <?php
        session_start();

        if( (!isset($_SESSION['Usuario']) == true) and (!isset($_SESSION['Chave']) == true) )
        {
            unset ($_SESSION['Usuario']);
            unset ($_SESSION['Chave']);

            header('location:entrar.php');
        }
        $Logado = ($_SESSION['Usuario']);
    ?>


<!-- 
inicio do menu depois de logar -->


    <div class="container">
        <div class="navigation">
          <ul>

            <!-- site dos icones: ionicons -->

              <li>
                  <a href="#">
                      <span class="icon"><ion-icon name="search-circle"></ion-icon></span>
                      <span class="title">Nome</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                      <span class="title">Clientes</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                      <span class="title">Respostas</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span class="icon"><ion-icon name="cellular-outline"></ion-icon></span>
                      <span class="title">Gráficos</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></ion-icon></span>
                      <span class="title">Central de ajuda</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span class="icon"><ion-icon name="log-out-outline"></ion-icon></ion-icon></ion-icon></span>
                      <span class="title">Sign Out</span>
                  </a>
              </li>
          </ul>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- 
final do menu depois de logar -->


</body>
</html>