<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Search of Success</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Frontend/telaPrincipal/css/home.css">
      
    </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-dark" id="nav" style=" background-color: rgb(75,0,130)">
      <a class="navbar-brand" href="#">S.O.S</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="ladinho">
        <a href="../TCC_CS/Frontend/telaLogin/entrar.php" style="text-decoration:none" ><button type="button" class="btn btn-outline-light  mr-3 ">Login</button></a>
        <a href="../TCC_CS/Frontend/telaCadastro/telaCadastro.php" style="text-decoration:none" ><button type="button" class="btn btn-outline-light" >Cadastre-se</button></a>
        </div><!--fim ladinho-->
      </div><!--fim collapse navbar-collapse-->
    </nav><!--fim nav-->
    
    <section class="fundo">
    <div class="texto">
      <h2>Search of Success!</h2>
      <h6>O Socorro para sua Empresa</h6>
      <p>O consumidor é o pilar principalmente para o crescimento de uma empresa, nesse caso,
        o Customer Success  busca garantir o sucesso do cliente ao adquirir serviço ou produto de uma determinada instituição, através de métricas, 
        que são responsáveis por verificar a experiência do cliente, promovendo o desenvolvimento contínuo do seu negócio.
      </p>
    </div>

    <div class="test">  
      <img src="Frontend/telaPrincipal/img/homeimg.webp">
    </div>
    </section><br><br><br><br>

    <div class="fundocard"><br><br>
    
    <h1 class="titulo">Aproveite o melhor da plataforma!</h1>


  <section class="balao"> 
    <div class="container">
        <div class="card">
            <div class="img">
               <img src="Frontend/telaPrincipal/img/grafico.png">
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
               <img src="Frontend/telaPrincipal/img/tempo-rapido.png">
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
</div>
  </section>


<!-- <img src="includes/telaPrincipal/img/test.png" class="imgtest" alt="graficos"> -->



















  
 <!--inicio fotter-->

  <footer>
     <div class="container-footer">
        <div class="row-footer">
         <!--  footer col -->
          <div class="footer-col">
              <h4>Quem somos?</h4>
              <ul>
                  <li><p>Somos a S.O.S, uma empresa fundada em 2022 especializada em Customer Success,
                     com o objetivo de aprimorar a relação das empresas com seus clientes,
                     através de estratégias,aplicações e métricas desenvolvidas.</p></li>
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
              <h4>Fale Conosco</h4>
              <!-- form sub -->

              <div class="form-sub">
                        <form action="https://formsubmit.co/customersuccessetec@gmail.com" method="POST" class="Form">
                            <label class="texto-sub-email" for="name">Nome</label>
                            <input type="text" name="name" id="name" required />
                            <label  class="texto-sub-email" for="email">E-mail</label>
                            <input type="email" name="email" id="email" required />
                            <label class="texto-sub-email" for="message">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem" required rows="3"
                                cols="40"></textarea><br>
                            <input type="hidden" name="_captcha" value="false" /> 
                            <input type="hidden" name="_next" value="http://127.0.0.1:80/TCC_CS/"/ >   <!--Arrumar locaçaõ quando as paginas estiverem conectadas-->
                           
                            <button class="btn btn-outline-light" type="submit" name="botao" value="Enviar">Enviar</button>
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