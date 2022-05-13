<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <style>

        @media (min-width: 768px){
          .ladinho{
            margin-left:65% !important;
            position: relative;
          }
        }

       
        
        .texto{
          /*background-color: pink;*/
          margin: 5%;
          margin-top: 8%;
          margin-right: 5%;
          padding:10px;
          display: inline-block;
          width: 30%;
          height: 50%;
          font-size: 1.7vw;
        }
        
        h2{
          font-size: 3vw;
        }
      
        img{
         width:100%;
         /*height:650%;*/
        }
      

        .test{
          display: inline-block;
          width: 55%;
          height: 55%;
          /*margin: 5%;
          margin-top: 10%;
          padding:30px;
          width: 65%;*/
        }
        
        /*div{
          display: inline-block;
          width: 100px;
          height: 100px;

        }*/
    


      </style>
    </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-dark" id="nav" style=" background-color: rgb(75,0,130)">
      <a class="navbar-brand" href="#">Nome</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="#">Plataforma</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Clientes</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pesquisas
            </a>

            <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
              <h6 class="dropdown-header">Tipos de pesquisa</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Pesquisa NPS</a>
              <a class="dropdown-item" href="#">Pesquisa CES</a>
              <a class="dropdown-item" href="#">Pesquisa CSAT</a>  
            </div>
          </li>
        </ul>

        <div class="ladinho">
          <button type="button" class="btn btn-outline-light  mr-3 ">Login</button> 
          <button type="button" class="btn btn-outline-light">Cadastre-se</button>
        </div><!--fim ladinho-->
      </div><!--fim collapse navbar-collapse-->
    </nav><!--fim nav-->
    
    <section>

    <div class="texto">
      <h2>Layout Container</h2><br><br>
      <p>The w3-cell-row class stretches the elements to fit the page width,Resize the browser window to see the effect.</p>
    </div>

    <div class="test">  
      <img src="tccimg.webp">
    </div>


    </section>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
  </body>
</html>