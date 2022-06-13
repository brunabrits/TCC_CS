<?php
session_start();

include "../../Database/conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$Matriz = $conexao->prepare("SELECT * FROM Cliente WHERE Email_cliente = ? AND Senha_cliente = ?");
$Matriz->bindParam(1, $email);
$Matriz->bindParam(2, md5($senha));

$Matriz->execute();

$Linha = $Matriz->fetch(PDO::FETCH_OBJ);

if($Linha > 0)
{
    $_SESSION['Usuario'] = $email;
    $_SESSION['Chave']   = $senha;

    header('location:painelTeste.php');
}
else
{
    $_SESSION['nao_autenticado'] = true;
    
    unset($_SESSION['Usuario']);
    unset($_SESSION['Chave']);

    header('location:entrar.php');
}