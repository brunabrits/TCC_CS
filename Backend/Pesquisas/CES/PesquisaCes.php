<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ces.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    
    <title>Pesquisa</title>
</head>
<body>
    <div class="pesquisa">
    <h1>Pesquisa CES</h1>

    <form action="Controleces.php" method="get" class="form">
    <label for="" class="ask">Qual seu nome?</label> <br>
    <input type="text" name="nomeces" placeholder="Nome Completo" required><br><br>

    <label for="" class="ask">Qual sua data de nascimento?</label> <br>
    <input type="date" name="dtces"><br><br>

    <label for="" class="ask">Qual seu e-mail?</label> <br>
    <input type="email" name="emaices" placeholder="exemplo@email.com"> <br><br>

    <label for="" class="ask">Quanto esforço você enfrentou para utilizar o nosso produto numa escala de 1 a 5?</label> <br>
    <input type="radio" name="ces" class="ball" value="1">1
    <input type="radio" name="ces" class="ball" value="2">2   
    <input type="radio" name="ces" class="ball" value="3">3    
    <input type="radio" name="ces" class="ball" value="4">4
    <input type="radio" name="ces" class="ball" value="5">5
    <br>

    <label for="" class="escala">Pouco esforço</label>
    <label for="" class="escala2">Muito esforço</label>
    <hr>
    <input type="submit" class="button" name="botao" value="Enviar">
    </form> 
    </div> 
</body>
</html>