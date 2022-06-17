<?php 
// Aqui ele envia as respostas para o banco 
include '../Conexaopesquisas.php';

class En_pesquisa
{
	public function incluir(ValCsat $c){
		
		$sql = "INSERT INTO Respostas(Vlr_resposta, Email_resposta,Dt_nasc) VALUES (?, ?, ?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getCsat());
		$stm->bindValue(2, $c->getEmaicsat());
		$stm->bindValue(3, $c->getDtcsat());
	  //$stm->bindValue(1, $c->getNomecsat());

		$resultado = $stm->execute();

		$csat =$_GET['csat'];

		if ($csat ==1)
		{	// Muito Insatisfeito
			$sql_mti = "INSERT INTO Csat(Tp_csat_mti) VALUES (1)";
			$vlr = $con->prepare($sql_mti);
		}
		else if ($csat ==2)
		{	//Insatisfeito
			$sql_i = "INSERT INTO Csat(Tp_csat_i) VALUES (1)";
			$vlr = $con->prepare($sql_i);
		}
		else if ($csat ==3)
		{	//Neutro
			$sql_n = "INSERT INTO Csat(Tp_csat_n) VALUES (1)";
			$vlr = $con->prepare($sql_n);
		}
		else if ($csat ==4)
		{	//Satisfeito
			$sql_s = "INSERT INTO Csat(Tp_csat_s) VALUES (1)";
			$vlr = $con->prepare($sql_s);
		}
		else if ($csat ==5)
		{	//Muito insatisfeito
			$sql_mts = "INSERT INTO Csat(Tp_csat_mts) VALUES (1)";
			$vlr = $con->prepare($sql_mts);
		}   
		else
		{
			echo("ERRO");
		}   

		$vlr_resultado = $vlr->execute();


		if($resultado){
			?>
			   <script> alert('Sua resposta foi enviada com Sucesso!')
			   javascript:window.location='PesquisaCsat.php'
			   </script>
			   <?php }else{
				   echo "Não foi possível concluir";
			  }
	}
}
?>