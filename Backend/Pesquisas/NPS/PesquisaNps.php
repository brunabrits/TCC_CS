<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/NPS.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <title>Pesquisa</title>
</head>
<body>
    <div class="pesquisa">
    <h1>Pesquisa NPS</h1>
    <br>
    <form action="Controlenps.php" method="get" class="form">

    <label for="" class="ask">Qual seu nome?</label><br>
    <input type="text" name="nomenps" required ><br><br>

    <label for="" class="ask">Qual sua data de nascimento?</label><br>
    <input type="date" name="dtnps"><br><br>


    <label for="" class="ask">Qual seu e-mail?</label><br>
    <input type="email" name="emainps" required><br><br>

    <label for="" class="ask">Em uma escala de 0 a 10, quanto você indicaria a nossa empresa para um amigo e/ou familiar?</label> <br>
    <input type="radio" name="nps" value="0" class="ball">0
    <input type="radio" name="nps" value="1" class="ball">1
    <input type="radio" name="nps" value="2" class="ball">2   
    <input type="radio" name="nps" value="3" class="ball">3    
    <input type="radio" name="nps" value="4" class="ball">4
    <input type="radio" name="nps" value="5" class="ball">5
    <input type="radio" name="nps" value="6" class="ball">6
    <input type="radio" name="nps" value="7" class="ball">7
    <input type="radio" name="nps" value="8" class="ball">8
    <input type="radio" name="nps" value="9" class="ball">9
    <input type="radio" name="nps" value="10" class="ball">10
    <br>

    <label for="" class="escala">Não Recomendaria</label>
    <label for="" class="escala2">Recomendaria</label>

    <hr>
    <input type="submit" name="botao" value="Enviar" class="button">
 

    </form> 
    </div>
</body>
</html>