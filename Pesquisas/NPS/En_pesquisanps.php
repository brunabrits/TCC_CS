<?php 
include '../../Cadastro/conexao.php';

class En_pesquisa
{
	public function incluir(ValNps  $n){

		$bd = new Conexao();
		$con = $bd->getConexao();
		
		
		// Envio das respostas dentro da tabela resposta 
		$sql = "INSERT INTO Respostas(Vlr_resposta, Email_resposta,Dt_nasc) VALUES (?,?,?)";
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $n->getNps());
		$stm->bindValue(2, $n->getEmainps());
		$stm->bindValue(3, $n->getDtnps());
		$resultado = $stm->execute();

		// Envio da resposta da metrica dentro da tabela Csat
		$nps =$_GET['nps'];

			if ($nps<=6)
			{
			   $sql_d = "INSERT INTO Nps(Tp_nps_detrator) VALUES (1)";
			   $vlr = $con->prepare($sql_d);
			}
			
			else if ($nps ==7 or $nps ==8)
			{
			   $sql_n = "INSERT INTO Nps(Tp_nps_neutro) VALUES (1)";
			   $vlr = $con->prepare($sql_n);
			}
			
			else if ($nps ==9 or  $nps ==10)
			{
			   $sql_p = "INSERT INTO Nps(Tp_nps_promotor) VALUES (1)";
			   $vlr = $con->prepare($sql_p);
			}
			else
			{
			   echo("ERRO NPS ");
			}
		
			$vlr_resultado = $vlr->execute();

			//Envio da valor da pergunta, tipo da pesquisa e da pergunta  
			$sql_tp= "INSERT INTO Pesquisa(Tp_pesquisa) VALUE ('NPS')";
			$tp= $con->prepare($sql_tp); 
			$tp_resultado = $tp->execute();

			$sql_pr= "UPDATE Respostas SET fk_Tp_pesquisa = (SELECT MAX(Id_pesquisa) FROM Pesquisa) WHERE Id_resposta =(SELECT MAX(Id_resposta) FROM Respostas);";
			$pr= $con->prepare($sql_pr); 
			$pr_resultado = $pr->execute();


	
			// Condição do execute, se ele funcionar a resposta foi enviada 
			if($resultado){
			 ?>
				<script> alert('Sua resposta foi enviada com Sucesso!')
				javascript:window.location='PesquisaNps.php'
				</script>
				<?php }else{ ?>
					<script> alert('Sua resposta foi enviada com Sucesso!')</script> <?php
   			}

	}
}

?>
