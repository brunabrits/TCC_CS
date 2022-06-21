<?php 
include '../../Cadastro/conexao.php';

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
			$sql_t= "update Respostas set fk_Tp_pesquisa = (select max(Id_pesquisa) from Pesquisa) where Id_resposta =(select max(Id_resposta) from Respostas);";
			$t= $con->prepare($sql_t); 
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
