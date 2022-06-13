<?php

$Bco = 'Tcc_cs';
$Usuario = 'root';
$Senha = '';

try {
	$conexao = new PDO("mysql:host=localhost; dbname=$Bco", "$Usuario", "$Senha");
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao->exec("set names utf8");
} 
catch (PDOException $erro) 
{
	echo "Erro na Conexão" . $erro->getMessage();
	exit();
}