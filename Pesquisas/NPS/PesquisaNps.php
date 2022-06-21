<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nps.css"/>

    <title>Pesquisa</title>
</head>
<body>
    <header>Pesquisa NPS </header>
    <br>
    <form action="Controlenps.php" method="get">

    <label for="">1. Qual seu nome?</label><br>
    <input type="text" name="nomenps" required ><br>

    <label for="">2. Qual sua data de nascimento?</label><br>
    <input type="date" name="dtnps"><br>


    <label for="">3. Qual seu e-mail?</label><br>
    <input type="email" name="emainps" required><br>

    <label for="">4. Em uma escala de 0 a 10, o quanto você indicaria a nossa empresa para um amigo e/ou familiar?</label> <br>
    <input type="radio" name="nps" value="0">0
    <input type="radio" name="nps" value="1">1
    <input type="radio" name="nps" value="2">2   
    <input type="radio" name="nps" value="3">3    
    <input type="radio" name="nps" value="4">4
    <input type="radio" name="nps" value="5">5
    <input type="radio" name="nps" value="6">6
    <input type="radio" name="nps" value="7">7
    <input type="radio" name="nps" value="8">8
    <input type="radio" name="nps" value="9">9
    <input type="radio" name="nps" value="10">10
    <br>
    <hr>
    <input type="submit" name="botao" value="Enviar">
 

    </form> 
</body>
</html>