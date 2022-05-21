<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Seja bem vindo ao Sistema</h1>

    <?php
        session_start();

        if( (!isset($_SESSION['Usuario']) == true) and (!isset($_SESSION['Chave']) == true) )
        {
            unset ($_SESSION['Usuario']);
            unset ($_SESSION['Chave']);

            header('location:entrar.php');
        }
        $Logado = ($_SESSION['Usuario']);
    ?>
</body>
</html>