<?php 
// Aqui ele envia as respostas para o banco 
include '../Conexaopesquisas.php';

class En_pesquisa
{
	public function incluir(ValNps $n){
		                  // era o mauisculo Teste 
		
		$sql = "insert into nps values (?, ?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $n->getNomenps());
		$stm->bindValue(2, $n->getDtnps());
		$stm->bindValue(3, $n->getEmainps());
		$stm->bindValue(4, $n->getNps());
		$resultado = $stm->execute();

		if($resultado){
			echo "Pesquisa Enviada";
		}else{
			echo "Não foi possível concluir";
		}
	}
}
?>