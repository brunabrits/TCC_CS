<?php 

include 'clientes.php';
include 'clienteDao.php';

$cod_clientes = $_POST['cod_clientes'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$renda_familiar = $_POST['renda_familiar'];
$botao = $_POST['botao'];

//instancia
$clientes = new Clientes();
$clienteDao = new ClienteDao();

$clientes->setCod_clientes($cod_clientes);
$clientes->setNome($nome);
$clientes->setIdade($idade);
$clientes->setRenda_familiar($renda_familiar);

if($botao=="cadastrar"){
	$clienteDao->cadastrar($clientes);
}else if($botao=="atualizar"){
	$clienteDao->atualizar($clientes);
}else if($botao=="deletar"){
	$clienteDao->deletar($clientes);
}else if($botao=="buscar"){

	foreach($clienteDao->buscar() as $resultado){
		echo $resultado['cod_clientes']."<br>";
		echo $resultado['nome']."<br>";
		echo $resultado['idade']. "<br>";
		echo $resultado['renda_familiar']."<hr>";
	}

}





