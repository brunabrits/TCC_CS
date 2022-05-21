<?php 
// Aqui ele envia as respostas para o banco 
include '../Conexaopesquisas.php';

class En_pesquisa
{
	public function incluir(ValCsat $c){
		
		$sql = "insert into csat values (?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getNomecsat());
		$stm->bindValue(2, $c->getDtcsat());
		$stm->bindValue(3, $c->getEmaicsat());
		$stm->bindValue(4, $c->getCsat());
		$resultado = $stm->execute();

		if($resultado){
			echo "Pesquisa Enviada";
		}else{
			echo "Não foi possível concluir";
		}
	}
}
?>