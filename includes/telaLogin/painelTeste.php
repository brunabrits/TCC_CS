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
            padding-top: 30px 0 150px 0;
            overflow: auto;
        }

        .sidebar .nav-links::-webkit-scrollbar{
            display: none;
        }
       
        .sidebar .nav-links li{
            list-style: none;
            position: relative;
            transition: all 0.4s ease;

        }

        .sidebar .nav-links li:hover{
            background: #ceaadb;
        }


        .sidebar .nav-links li .iocn-link{
           display: flex; 
           align-items: center;
           justify-content: space-between;
        }


        .sidebar .nav-links li i{
            height: 50px;
            min-width: 66px;
            text-align: center;
            line-height: 50px;
            color: #fff;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .sidebar .nav-links li.showMenu i.arrow{
            transform: rotate(-180deg);
        }

        .sidebar .nav-links li a{
            text-decoration: none;
            align-items: center;
            display: flex;
        }

        .sidebar .nav-links li a .link_name{
            font-size: 18px;
            font-weight: 400;
            color: #fff;
        }

        .sidebar .nav-links li .sub-menu{
            padding: 6px 6px 14px 80px;
            margin-top: -10px;
            background: #ceaadb;
            display: none; 
        }

        .sidebar .nav-links li.showMenu .sub-menu{
            display: block;  
        }

        .sidebar .nav-links li .sub-menu a{
            color: #fff;
            font-size: 15px;
            padding: 5px 0;
            white-space: nowrap;
            opacity: 0.6;
            transition: all 0.3 ease;
        }

        .sidebar .nav-links li .sub-menu a:hover{
            opacity: 1;
        }

        .sidebar.close .nav-links li .sub-menu{
           position: absolute;
           left: 100%;
           top: -10px;
           margin-top: 0;
           padding: 10px 20px;
           border-radius: 0 6px 6px 0;
           transition: all 0.4s ease;
           opacity: 0;
           pointer-events: none;
        }

        

        .sidebar.close .nav-links li:hover .sub-menu{
            top: 0;
            opacity: 1;
            pointer-events: auto;

        }

        .sidebar .nav-links li .sub-menu .link_name{
            display: none ;

        }


        .sidebar.close .nav-links li .sub-menu .link_name{
           font-size: 18px;
           opacity: 1;
           display: block;
        }

        .home-section{
            position: relative;
            background: #E4E9F7;
            height: 100vh;
            left: 260px;
            width: calc(100% - 260px)
        }

        .home-section .home-content{
            height: 60px;
            display: flex;
            align-items: center;
        }

        .home-section .home-content .bx-menu,
        .home-section .home-content .text{
            color: #11101d;
            font-size: 35px;
        }

        .home-section .home-content .bx-menu{
            margin: 0 15px;
        }

        .home-section .home-content .text{
            font-size: 26px;
            font-weight: 600;
        }
    </style>
</head>

    <div class="sidebar">
        <div class="logo-details">
           <i class='bx bxs-face-mask'></i>
           <span class="logo_name">Nome</span>
        </div>
        <ul class="nav-links">

            <li>
                <a href="#">
                <i class='bx bxs-user-plus' ></i>
                  <span class="link_name">Clientes</span>
                </a>
            </li>

            <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bx-signal-4'></i>
                    <span class="link_name">Gráficos</span>
                  </a>
                  <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="#">Gráfico NPS</a></li>
                    <li><a href="#">Gráfico CES</a></li>
                    <li><a href="#">Gráfico CSAT</a></li>
                </ul>
            </li>

            <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bx-edit-alt'></i>
                    <span class="link_name">Pesquisas</span>
                  </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="../../TCC_CS/Pesquisas/NPS/PesquisaNps.php">Pesquisa NPS</a></li>
                    <li><a href="../../TCC_CS/Pesquisas/CES/PesquisaCes.php">Pesquisa CES</a></li>
                    <li><a href="../../TCC_CS/Pesquisas/CSAT/PesquisaCsat.php">pesquisa CSAT</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
           <i class='bx bx-menu'></i>
           <span class="text">Drop Dows Sidebar</span>
        </div>
    </section>

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{

            let arrowParent = e.target.parentElement.parentElement;
            console.log(arrowParent);
            arrowParent.classList.toggle("showMenu");
       });
    }


    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()={
        sidebar.classList.toggle("close");
    });

</script>


    
          <script src="script.js"></script>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>