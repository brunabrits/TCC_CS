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

        *{
          font-family: Arial, Helvetica, sans-serif;

         }

        @media (min-width: 768px){
          .ladinho{
            margin-left:65% !important;
            position: relative;
          }
        }

        .texto{
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
      
        }     

        .test{
          display: inline-block;
          width: 55%;
          height: 55%;
        
        }

        .container{
            width: 1150px;
            padding: 20px;
            display:flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .container .card{
          position: relative;
          padding: 10px;
          width: 300px;
          background-color: white;
          margin: 20px;
          border: 1px solid black;
          border-radius: 20px;
          overflow: hidden;
          transition: 0.5s;
          text-align: center;
        }

        .container .card img{
          transition: 0.5s;
          width:200px ;
          height:200px ;

        }

        .container .card h1{
          font-size: 2rem;

         }

         .container .card .content{
           padding: 20px;
           text-align: center;
         }

         .container .card .content p{
           color: #666;
         }

        .container .card:hover{
           background-color:  rgb(75,0,130);
           color: white;
           margin-top:-30px;
           box-shadow: 2px 20px 25px #dc2e685d;
           border-color:  rgb(75,0,130);
        }

        .container .card:hover img{
            filter: invert(1);
            width:55% ;
            height:55% ;
        }

        .container .card:houver .content p{
          color: white;
        }

        .balao {
          display:flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;


        }




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
      <img src="includes/telaPrincipal/homeimg.webp">
    </div>
    </section>


  <section class="balao"> 
    
    <div class="container">
        <div class="card">
            <div class="img">
               <img src="includes/telaPrincipal/grafico.png">
             </div>
          <h1>Gráficos inteligentes</h1>
          <div class="content">
            <p>
            Através das pesquisas são gerados gráficos que apresentam o 
            feedback do seus clientes sobre os serviços e/ou produtos da empresa.
               
            </p>     
       </div>
    </div>

    <div class="card">
            <div class="img">
               <img src="https://cdn-icons-png.flaticon.com/512/3126/3126647.png">
          </div>
          <h1>Pesquisas elaboradas para seus clientes</h1>
          <div class="content">
            <p>
            Tenha acesso aos melhores formulários elaborados para seus clientes, e escolha o modelo ideal que combine com sua empresa
            </p>     
       </div>
    </div>

    <div class="card">
            <div class="img">
               <img src="includes/telaPrincipal/tempo-rapido.png">
          </div>
          <h1>Relatórios prontos para minimizar seu tempo</h1>
          <div class="content">
            <p>
               Lorem ipsum dolor, sit amet consectetur adipisicing elit.
               Consequuntur soluta animi placeat vitae officiis quo neque inventore, 
               dolorem error quas, 
            </p>     
       </div>
    </div>
  </div>

  
         

    






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
  </body>
</html>