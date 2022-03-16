<?php 

include 'conexao.php';

class ClienteDao
{
	
	public function cadastrar(Clientes $c){
		$sql = "insert into clientes values (?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getCod_clientes());
		$stm->bindValue(2, $c->getNome());
		$stm->bindValue(3, $c->getIdade());
		$stm->bindValue(4, $c->getRenda_familiar());
		$resultado = $stm->execute();

		if($resultado){
			echo "cadastrou";
		}else{
			echo "não cadastrou";
		}
	}

	public function atualizar(Clientes $c){
		$sql = "update clientes set nome=?, renda_familiar=?, idade=? where cod_clientes=?";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getNome());
		$stm->bindValue(2, $c->getRenda_familiar());
		$stm->bindValue(3, $c->getIdade());
		$stm->bindValue(4, $c->getCod_clientes());
		$resultado = $stm->execute();

		if($resultado){
			echo "atualizado";
		}else{
			echo "não atualizado";
		}
	}

	public function deletar(Clientes $c){
		$sql = "delete from clientes where cod_clientes=?";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getCod_clientes());
		$resultado = $stm->execute();

		if($resultado){
			echo "deletado";
		}else{
			echo "não deletado";
		}
	}

	public function buscar(){
		$sql = "select * from clientes";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->execute();
		if($stm->rowCount()>0){
		   $resultado = $stm->fetchAll(\PDO::FETCH_ASSOC);
		   return $resultado;
		}

	}

}