<?php 
include '../Conexaopesquisas.php';

class En_pesquisa
{
	public function incluir(ValNps  $n){
		
		// Envio das respostas dentro da tabela resposta 
		$sql = "INSERT INTO Respostas(Vlr_resposta, Email_resposta,Dt_nasc) VALUES (?,?,?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
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
			$sql_vn="INSERT INTO Perguntas(Vlr_pergunta /*, Nm_pergunta*/) VALUE (1 /*,'Em uma escala de 0 a 10, o quanto você indicaria a nossa empresa para um amigo e/ou familiar?'*/)";
			$sql_t= "INSERT INTO Pesquisa(Tp_pesquisa) VALUE ('NPS')";
			$vn= $con->prepare($sql_vn); 
			$t= $con->prepare($sql_t); 
			$vn_resultado = $vn->execute();
			$t_resultado = $t->execute();

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
