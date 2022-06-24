<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    
    <center>
        <img class="logo" src="img/logo.png" alt="">
    </center>

    <section class="menu">
        <form action="login.php" method="POST">
            <div class="menu-login">
                <h1>Login</h1>

                <input type="email" name="email" id="" placeholder="Email"><br><br>
                <input type="password" name="senha" id="" placeholder="Senha"><br><br>

                <button class="btn">Entrar</button>

                <div class="conexao">
                    <p>“Faça um cliente, não uma venda.”</p>
                </div><!--fim conexao-->

                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                ?>
                    <div>
                        <p>ERRO: Usuário ou senha inválidos.</p>
                    </div><!--ERRO-->
                <?php
                endif;

                unset($_SESSION['nao_autenticado']);
                unset($_SESSION['Usuario']);
                unset($_SESSION['Chave']);
                ?>

            </div><!--fim login-->
        </form>
        
    </section><!--fim menu-->

</body>

</html>