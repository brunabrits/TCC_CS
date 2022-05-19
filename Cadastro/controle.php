<?php 

include 'clientes.php';
include 'clienteDao.php';

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$botao = $_GET['botao'];

$clientes = new Clientes();
$clienteDao = new ClienteDao();

$clientes->setNome($nome);
$clientes->setEmail($email);
$clientes->setSenha($senha);

if($botao=="cadastrar"){
	$clienteDao->cadastrar($clientes);
}





