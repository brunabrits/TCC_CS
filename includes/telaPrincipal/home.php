<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/home.css">
      <style>

        *{
          font-family: Arial, Helvetica, sans-serif;

         }

         @media (min-width: 768px){
          .ladinho{
            margin-left:auto;
            position: relative;
            display: flex;
          }
        }

        .texto{
          margin: 5%;
          margin-top: 8%;
          margin-right: 5%;
          padding:10px;
          display: inline-block;
          width: 40%;
          height: 60%;
          font-size: 1.7vw;
          
        }
        
        h2{
          font-size: 3vw;
          margin-bottom: 55px;
        }
      
        img{
         width:90%;
         
      
        }     

        .test{
        /*  display: inline-block;
          width: 55%;
       /*   height: 55%;*/
        text-align: center;
        padding-top: 35px;
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

        a { color: inherit; } 
        

        .midias-sociais{
          position: relative;
          width: 30px;
          height: 30px;
        } 

        .titulo{
          text-align: center;
        }

        .fundo{
          background-color: white;
          height: 48vw; 
          display: flex;
        }

       /*fotter*/

        footer{
           background-color:rgb(75,0,130);
           padding: 50px 50px; 
        }

        .container-footer{
          max-width: 1400px;
          padding: 0 4%;
          margin: auto;
        }

        .row-footer{
           display: flex;
           flex-wrap: wrap;
        }

        .footer-col{
           width: 25%;
           padding: 0 15px;
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
        
         .footer-col p{
             margin-top: 30px;
        }

         .footer-col p a i{
          display: inline-flex;
          align-items: center;
          justify-content: center;
          border-radius: 50%;
          color: white;
          height: 30px;
          width: 30px;
          margin: 0 5px 5px 0;
          text-decoration: none;
          border: 1px solid white;
          transition: all 0.5s ease;
          font-size: 15px;

         
          }
         

         /* .footer-col .midias-sociais a i{
          font-size: 15px;
        }  */

         /* .footer-col .midias-sociais a:hover{
          color: rgb(75,0,130);
          background-color: white;
        }  */

         .icone{
        
          margin: 0px 20px 20px 0;   
          color: white; 
          font-size: 15px;   
          align-items: center;
       
        } 

        /* display: inline-flex;
          align-items: center;
          justify-content: center; */



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
 
         @media (max-width: 1110px){
          .fundo{
            flex-direction: column;  
            height: 120vw; 
            
        }

           .texto{    
             width: 80%;
             padding-left: 40px;
             font-size: 2.8vw;
             text-align: center;
        
        }

        .texto h2{
          font-size: 6vw;
        }

        .imgtest{
          width: 30vw;
        }
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
            <a class="nav-link" href="#">Clientes</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pesquisas
            </a>

            <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
              <h6 class="dropdown-header">Tipos de pesquisa</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../../TCC_CS/Pesquisas/NPS/PesquisaNps.php">Pesquisa NPS</a>
              <a class="dropdown-item" href="../../TCC_CS/Pesquisas/CES/PesquisaCes.php">Pesquisa CES</a>
              <a class="dropdown-item" href="../../TCC_CS/Pesquisas/CSAT/PesquisaCsat.php">Pesquisa CSAT</a>  
            </div>
          </li>
        </ul>
       
        <div class="ladinho">
          <button type="button" class="btn btn-outline-light  mr-3 "><a href="../TCC_CS/includes/telaLogin/entrar.php" style="text-decoration:none" >Login</a></button> 
          <button type="button" class="btn btn-outline-light" ><a href="../TCC_CS/Cadastro/telaCadastro.php" style="text-decoration:none" >Cadastre-se</a></button>
        </div><!--fim ladinho-->
      </div><!--fim collapse navbar-collapse-->
    </nav><!--fim nav-->
    
    <section class="fundo">
    <div class="texto">
      <h2>Layout Container</h2><!--<br><br>-->
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Molestiae temporibus nostrum fuga,Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Molestiae temporibus nostrum fuga,


      </p>
    </div>

    <div class="test">  
      <img src="includes/telaPrincipal/homeimg.webp">
    </div>
    </section><br><br><br><br>

    <h1 class="titulo">Aproveite o melhor da plataforma!</h1>


  <section class="balao"> 
    <div class="container">
        <div class="card">
            <div class="img">
               <img src="includes/telaPrincipal/grafico.png">
             </div>
          <h1>Gráficos inteligentes</h1>
          <div class="content">
            <p>
            Através das pesquisas, são gerados gráficos que apresentam o 
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
               Otimize tempo com nossos relatórios inteligentes 
               que possuem fácil manuseio e eficácia 
            </p>     
       </div>
    </div>
  </div>
  </section>

<
<!-- <img src="includes/telaPrincipal/img/test.png" class="imgtest" alt="graficos"> -->



















  
 <!--inicio fotter-->

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
                 <p class="icone">
                    <a href=""><i class="fa fa-facebook"></i></a>Facebook<br>
                    <a href=""><i class="fa fa-instagram"></i></a>Instagram<br>
                    <a ><i class="fa fa-phone"></i></a>(11)0465427445<br>
                 </p> 
          </div>
         <!-- end footer col -->
          <!--  footer col -->
          <div class="footer-col">
              <h4>Mensagem</h4>
              <!-- form sub -->
              
                    <div class="form-sub">
                       <form>
                          <input  type="email" placeholder="Digite o seu e-mail" required><br><br>
                  	      <textarea  id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="3" cols="40"></textarea><br>
                          <button class="btn btn-outline-light">Enviar</button>
                       </form>    
                    </div>
               
              <!-- end form sub -->
              
          </div> <!-- end footer col -->

        </div>
     </div>
  </footer>

  <!--fim fotter-->


         
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
  </body>
</html>