<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sistema de Cadastro </title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<header></header>
<div class="container">
	<br>
	<h1>Sistema de Cadastro</h1>
	
	<div class="row">
		<div class="col-md-12">
			<form action="../../Backend/Cadastro/controle.php" method="GET">
				
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