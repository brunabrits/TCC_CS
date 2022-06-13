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

        .menu_side{
            width: 80px;
            height: 100%;
            background:  rgb(75,0,130);
            position: fixed;
            top: 0;
            left: 0;
            color: white;
            font-size: 18px;
            z-index: 300;
            overflow: hidden;
            overflow-y: scroll;
            border-right: 20px solid rgb(75,0,130);
        }


        body{
             margin-left: 80px;

        }

        .name_page{
            padding: 20px 30px;
            display: flex;
            align-items: center;
            margin-top: 10px;
            
        }

        .name_page span{
            margin-right: 20px;
            width: 20px;
        }

        .options_menu{
            padding: 20px 30px; 
            position: absolute;
            top: 80px;
        }

        .options_menu a{
            color: #ffffffb2;
            cursor: default;
            display: block;
            position: relative;
            transition: color 300ms;
        }

        .options_menu a:hover{
            color: white;
        }

        .options_menu .option{
            padding: 20px 0px;
            display: flex ;
            align-items: center;
            position: relative;
        }

        .options_menu .option span{
            margin-right: 20px;
            width: 20px;
            cursor: pointer;

        } 

        .options_menu .option h4{
            font-weight: 300;
            cursor: pointer;
        }

        a.selected{
            color: #fff;
        }

        .selected:before{
            content: '';
            width: 3px;
            height: 80%;
            background-color: white;
            position: absolute;
            top: 10%;
            left: -30px;

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

              <!-- <a href="#">
                  <div class="option">
                      <span><ion-icon name="home-outline"></ion-icon></span>
                      <span class="title">Início</span>
                  </div>
              </a> -->

              <a href="#">
                  <div class="option">
                      <!-- <i class="fas fa-home" title="graficos">Gráficos</i> -->
                       <span><ion-icon name="cellular-outline"></ion-icon></span>
                       <span class="title">Gráficos</span>
                  </div>
              </a>

              <a href="#">
                  <div class="option">
                      <!-- <i class="fas fa-home" title="Gráficos">Início</i> -->
                        <span><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Clientes</span>
                  </div>
              </a>

              <!-- <a href="#">
                  <div class="option">
                       <span><ion-icon name="reader-outline"></ion-icon></span>
                       <span class="title">Relatórios</span>
                  </div>
              </a> -->

              <!-- <a href="#">
                  <div class="option">
                       <span><ion-icon name="exit-outline"></ion-icon><span>
                       <span class="title">sair</span>
                  </div>
              </a> -->
          </div>
    </div>

          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>