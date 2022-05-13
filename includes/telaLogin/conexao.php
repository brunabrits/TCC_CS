<?php

//CONSTANTES DE CONEXÃO COM O BANCO DE DADOS
define('HOST', '127.0.0.1');

define('USUARIO', 'root');

define('SENHA', '');

define('DB', '');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');