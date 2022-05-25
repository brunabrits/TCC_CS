<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sistema de Cadastro </title>
	<!--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<header></header>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav" style=" background-color: rgb(75,0,130)">
      <a class="navbar-brand" href="">Nome</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="../../TCC_CS/index.php">Plataforma</a>
          </li>

        </ul>
       </div>
      </div>
    </nav>
<div class="container">
	<br>
	<h1>Sistema de Cadastro</h1>
	<br>
	<div class="row">
		<div class="col-md-12">
			<form action="controle.php" method="GET">
				
				<p><input type="text" class="form-control" name="nome" placeholder="Nome Completo" required></p>
				<p><input type="email" class="form-control" name="email" placeholder="exemplo@email.com" required></p>
				<p><input type="password" class="form-control" name="senha" placeholder="Senha" required></p>
				<br>
				<div class="row">
					<div class="col-md-12">		
							<input class="btn btn-success" type="submit" name="botao" 
								value="cadastrar">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>