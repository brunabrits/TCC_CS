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

        a{
          
        }

        .midias-sociais{
          position: relative;
          width: 30px;
          height: 30px;
        } 

       /*fotter*/

        footer{
           background-color:rgb(75,0,130);
           padding: 50px 50px; 
        }

        .container-footer{
          max-width: 1400px;
          padding 0 4%;
          margin: auto;
        }

        .row-footer{
           display: flex;
           flex-wrap: wrap;
        }

        .footer-col{
           width: 25%;
           padding: 0 15px:
        }

        .footer-col h4{
           font-size: 22px;
           color: white;
           margin-bottom: 20px;
           font-weight:500;
           position: relative;
           text-transform: uppercase;
        }

        .footer-col ul{
          list-style: none;
        }

        .footer-col ul li{
           margin: 10px 0;
        }

        .footer-col ul li p{
           font-size: 16px;
           text-transform: capitalize;
           color: white;
           text-decoration: none;
           font-weight: 300;
           display: block;
           transition: all 0.3s ease;

        }

        .footer-col .form-sub input{
          width: 100%;
          padding: 10px;
          font-size: 15px;
          outline: none;
          border: 1px solid white;
          color: white;
          background-color: rgb(75,0,130);
        }

        .footer-col .form-sub textarea{
          width: 100%;
          padding: 10px;
          font-size: 15px;
          outline: none;
          border: 1px solid white;
          color: white;
          background-color: rgb(75,0,130);
        }

        .footer-col .form-sub input::placeholder{
          color: white;
        }

        .footer-col .form-sub textarea::placeholder{
          color: white;
        }

        .footer-col .form-sub button{
          width: 100%;
          margin-top: 10px;
          padding: 10px;
          font-size: 17px;
          outline: none;
          border: none;
          cursor: pointer;
          color: rgb(75,0,130);
          border-radius: 3px;
          font-weight: bold;
          background-color: white ; 
        }

        .footer-col .midias-sociais svg{
          display: inline-flex;
          align-items: center;
          justify-content: center;
          height: 20px;
          width: 20px;
          margin: 0 10px 10px 0;
          text-decoration: none;
          border-radius: 50%;
          color: white;
          border: 1px solid white;
          transition: all 0.5s ease;
        }


        /* footer responsivo */

        @media (max-width:800px){
           .footer-col{
               width: 50%;
               margin-bottom: 30px;
           }
        }

        @media (max-width: 600px){
          .footer-col{
            width: 100%;
          }
        }
  
        /*fim footer*/


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
          <button type="button" class="btn btn-outline-light  mr-3 "><a href="../TCC_CS/includes/telaLogin/entrar.php" style="text-decoration:none" >Login</a></button> 
          <button type="button" class="btn btn-outline-light" ><a href="../TCC_CS/Cadastro/telaCadastro.php" style="text-decoration:none">Cadastre-se</a></button>
        </div><!--fim ladinho-->
      </div><!--fim collapse navbar-collapse-->
    </nav><!--fim nav-->
    
    <section>
    <div class="texto">
      <h2>Layout Container</h2><br><br>
      <p>The w3-cell-row class stretches the elements</p>
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
  </section>
  


  <footer>
     <div class="container-footer">
        <div class="row-footer">
         <!--  footer col -->
          <div class="footer-col">
              <h4>Empresa</h4>
              <ul>
                  <li><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, 
                    nemo veniam ab eius aut esse ullam repellendus quas accusamus odit est! Culpa,
                     expedita! Asperiores iure voluptatum magnam dolorum modi! Ex?</p></li>
              </ul>
          </div>
         <!-- end footer col -->
           <!--  footer col -->
           <div class="footer-col">
              <h4>Criadores</h4>
              <ul>
                   <li><p>Alice<br>Bruna<br>Dandara<br>Lucas<br>Silas<br></p></li>
              </ul>
          </div>
         <!-- end footer col -->
           <!--  footer col -->
           <div class="footer-col">
              <h4>Contatos</h4>
              <ul>
                   <p></p>
              </ul>
          </div>
         <!-- end footer col -->
          <!--  footer col -->
          <div class="footer-col">
              <h4>Mensagem</h4>
              <!-- form sub -->
              <div class="form-sub">
                  <form>
                    <input  type="email" placeholder="Digite o seu e-mail" required><br><br>
                  	<textarea  id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="4" cols="40"></textarea><br>
                    <button class="btn btn-outline-light">Enviar</button>
                  </form>    
              </div>
              <!-- end form sub -->
              
              <div class="midias-sociais">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                     <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                     </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                     <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                     </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg>
                </div> 
            
           </div> <!-- end footer col -->

        </div>
     </div>
  </footer>


         

    






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
  </body>
</html>