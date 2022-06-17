<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="email.php">
    <label for="">Nome</label>
    <input type="text" name="Nome">    

    <label for="">Email</label>
    <input type="text"  name="Email">

    <label for="">Assunto</label>
    <select name="Assunto">
    <option value="">Sugestao</option>
    <option value="">Critica</option>
    <option value="">Elogio</option>
    </select>

    <label for="">Msg</label>
    <textarea name="Msg" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="Botao">
</body>
</html>