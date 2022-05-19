<?php
session_start();

include('conexao.php');

if(empty($_POST['email'] || empty($_POST['senha']))) {
    header('Location: entrar.html');
    exit();
}

$email  = mysqli_real_escape_string($instancia, $_POST['email']);
$senha  = mysqli_real_escape_string($instancia, $_POST['senha']);

$query  = "select id_cliente, email from Clientes where email ='{$email}' and senha =md5('{$senha}')";

$result = mysqli_query($instancia, $query);

$row    = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: painel.php');
} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: entrar.php');
}

