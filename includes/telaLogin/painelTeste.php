<?php
session_start();

if ((!isset($_SESSION['Usuario']) == true) and (!isset($_SESSION['Chave']) == true)) {
  unset($_SESSION['Usuario']);
  unset($_SESSION['Chave']);

  header('location:entrar.php');
}
$Logado = ($_SESSION['Usuario']);
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

     <link rel="stylesheet" href="cssPainel/configPainel.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
<body>

  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">S.O.S</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../../Respostas/listagem.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Meus Clientes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Meus Clientes</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="link_name">Gráficos</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Gráficos</a></li>
          <li><a href="../../graficos/graficoNps.php">NPS</a></li>
          <li><a href="../../graficos/graficoCsat.php">CSAT</a></li>
          <li><a href="../../graficos/graficoCes.php">CES</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Pesquisas existentes</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Pesquisas existentes</a></li>
          <li><a href="../../Pesquisas/NPS/PesquisaNps.php">NPS</a></li>
          <li><a href="../../Pesquisas/CSAT/PesquisaCsat.php">CSAT</a></li>
          <li><a href="../../Pesquisas/CES/PesquisaCes.php">CES</a></li>
        </ul>
      </li>
      <li>
        
        <li>
            <div class="icon-link">
               <a href="logout.php">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                   <span class="link_name">Sair</span>
               </a>
           
           </div>
         </li>
         <li>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>


    <section class="fundo2">
    <div class="texto2">
      <h2>Bem Vindo...</h2>
      <p>Agora você poderá ter acesso as informações de todos os seus clientes,
         analisando os feedbacks da sua empresa através dos gráficos,
         além de escolher o formato ideal de pesquisa que será enviado.
      </p>
    </div>

    <div class="test2">  
       <img src="visual-data-animate (1).svg" alt="anim">
    </div>
    </section>



  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>


</body>
</html>
