<?php
session_start();

include('conexaoLogin.php');

if(empty($_POST['email'] || empty($_POST['senha']))) {
    header('Location: entrar.html');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha   = mysqli_real_escape_string($conexao, $_POST['senha']);

$query   = "select usuario_id, usuario from usuario where usuario ='{$email}' and senha =md5('{$senha}')";

$result  = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: painel.php');
} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: entrar.php');
}

