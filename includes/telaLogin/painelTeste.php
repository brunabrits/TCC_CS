<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Painel</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        header{
            width: 100%;
            height: 60px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            position:fixed;
            top: 0;
            z-index: 200;

        }

        .icon_menu{
            width: 50px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translatex(10px)
        }

        .icon_menu span{
            font-size: 20px;
            cursor: pointer;
            position: absolute;
        }

        .menu_side {
            width: 80px;
            height: 100%;
            background: red;
        }

    </style>
</head>
<body>
    <!-- <h1>Seja bem vindo ao Sistema</h1> -->

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

     <header>
          <div class="icon_menu">
              <i class="fas fa-bars"></i>
          </div>
     </header>

          <div class="menu_side">
              <div class="name_page">
                  <!-- <i class="fab fa-youtube"></i> -->
                  <h4>Nome</h4>
              </div>     

          <div class="options_menu">

              <a href="#">
                  <div class="option">
                      <span><ion-icon name="home-outline"></ion-icon></span>
                      <span class="title">Início</span>
                  </div>
              </a>

              <a href="#">
                  <div class="option">
                      <!-- <i class="fas fa-home" title="graficos">Gráficos</i> -->
                       <span><ion-icon name="cellular-outline"></ion-icon></span>
                       <span class="title">Clientes</span>
                  </div>
              </a>

              <a href="#">
                  <div class="option">
                      <!-- <i class="fas fa-home" title="Gráficos">Início</i> -->
                        <span><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Clientes</span>
                  </div>
              </a>

              <a href="#">
                  <div class="option">
                       <span><ion-icon name="reader-outline"></ion-icon></span>
                       <span class="title">Relatórios</span>
                  </div>
              </a>

              <a href="#">
                  <div class="option">
                       <span><ion-icon name="exit-outline"></ion-icon><span>
                       <span class="title">Sair</span>
                  </div>
              </a>
          </div>
    </div>

          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>