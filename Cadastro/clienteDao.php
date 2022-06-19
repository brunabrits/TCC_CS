<?php 

include 'conexao.php';

class ClienteDao
{
	
	public function cadastrar(Clientes $c){
		$sql = "insert into Cliente values (?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getId_cliente());
		$stm->bindValue(2, $c->getNome());
		$stm->bindValue(3, $c->getEmail());
		$stm->bindValue(4, md5($c->getSenha()));
		$resultado = $stm->execute();

		if($resultado){
			echo "Você se cadastrou";

			header('location: ../includes/telaLogin/entrar.php');
		}else{
			echo "Tente novamente";
		}
	}
}