<?php 
include '../Conexaopesquisas.php';

class En_pesquisa
{
	public function incluir(ValNps  $n){
  
		$sql = "INSERT INTO Respostas(Vlr_resposta, Email_resposta,Dt_nasc) VALUES (?,?,?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $n->getNps());
		$stm->bindValue(2, $n->getEmainps());
		$stm->bindValue(3, $n->getDtnps());
		$resultado = $stm->execute();

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
