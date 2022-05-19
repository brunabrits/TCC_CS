<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sistema de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header></header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TCC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Cliente</a>
        <a class="nav-link" href="#">Contatos</a>
        <a class="nav-link" href="#">Dados da Pesquisa</a>
		<a class="nav-link" href="#">Empresas</a>
        <a class="nav-link" href="#">Endereço</a>
        <a class="nav-link" href="#">Funcionários</a>
		<a class="nav-link" href="#">Pesquisas</a>
        <a class="nav-link" href="#">Produto</a>
        <a class="nav-link" href="#">Relatórios</a>
      </div>
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
				
				<p><input type="text" class="form-control" name="nome" placeholder="nome"></p>
				<p><input type="text" class="form-control" name="email" placeholder="email"></p>
				<p><input type="password" class="form-control" name="senha" placeholder="senha"></p>
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