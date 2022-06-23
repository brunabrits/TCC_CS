<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSAT.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    
    <title>Pesquisa</title>
</head>
<body>
    <div class="pesquisa">
    <h1>Pesquisa CSAT</h1>
    <br>

    <form action="Controlecsat.php" method="get" class="form">
    <label for="" class="ask">Qual seu nome?</label> <br>
    <input type="text" name="nomecsat" required ><br><br>

    <label for="" class="ask">Qual sua data de nascimento?</label> <br>
    <input type="date" name="dtcsat"><br><br>


    <label for="" class="ask">Qual seu e-mail?</label> <br>
    <input type="email" name="emaicsat"> <br><br>

    <label for="" class="ask">Como você classifica sua experiência com a empresa? </label> <br>
    <input type="radio" name="csat" value="1" class="ball">1 
    <input type="radio" name="csat" value="2" class="ball">2   
    <input type="radio" name="csat" value="3" class="ball">3    
    <input type="radio" name="csat" value="4" class="ball">4
    <input type="radio" name="csat" value="5" class="ball">5  
    <br>

    <label for="" class="escala">Insatisfatória</label>
    <label for="" class="escala2">Satisfatória</label>

    <hr>
    <input type="submit" name="botao" value="Enviar" class="button">
    </form>
    </div>
</body>
</html>