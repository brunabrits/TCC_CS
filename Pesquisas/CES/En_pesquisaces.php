<?php 
// Aqui ele envia as respostas para o banco 
include '../Conexaopesquisas.php';

class En_pesquisa
{
	public function incluir(ValCes $s){
		
		$sql = "insert into ces values (?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $s->getNomeces());
		$stm->bindValue(2, $s->getDtces());
		$stm->bindValue(3, $s->getEmaices());
		$stm->bindValue(4, $s->getCes());
		$resultado = $stm->execute();

		if($resultado){
			echo "Pesquisa Enviada";
		}else{
			echo "Não foi possível concluir";
		}
	}
}
?>