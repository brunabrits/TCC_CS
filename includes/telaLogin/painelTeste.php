<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Painel</title>
    <style>
*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* text-decoration: none; */
            font-family: Arial, Helvetica, sans-serif;
        }




        .sidebar{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 260px;
            background:  rgb(75,0,130);

        }

        .sidebar .logo-details{
            height: 65px;
            width: 100%;
            display: flex;
            align-items: center;

        }

        .sidebar .logo-details i{
            font-size: 30px;
            color: #fff;
            
            height: 50px;
            min-width: 78px;
            text-align: center;
            line-height: 50px;

        }

        .sidebar .logo-details .logo_name{
            font-size: 22px;
            color: #fff;
            font-weight: 600;
        }

        .sidebar .nav-links{
            background: rgb(75,0,130);
            height: 100%;
            padding: 30px;
        }
       
        .sidebar .nav-links li{
            list-style: none;
            position: relative;

        }

        .sidebar .nav-links li i{
            height: 50px;
            min-width: 66px;
            text-align: center;
            line-height: 50px;
            color: #fff;
        }

        





    </style>
</head>
<body id="body">
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

    <div class="sidebar">
        <div class="logo-details">
           <i class='bx bxs-face-mask'></i>
           <span class="logo_name">Nome</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                  <i class='bx bx-grid-alt'></i>
                  <span class="link_name">oii</span>
                </a>
            </li>

            <li>
                <a href="#">
                <i class='bx bxs-user-plus' ></i>
                  <span class="link_name">Clientes</span>
                </a>
            </li>

            <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Gráficos</span>
                  </a>
                    <i class='bx bx-chevron-down'></i>
                </div>
            </li>
        </ul>
    </div>






    
          <script src="script.js"></script>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>