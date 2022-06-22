<?php 
// Aqui ele envia as respostas para o banco 
include '../../Cadastro/conexao.php';

class En_pesquisa
{
	public function incluir(ValCsat $c){

		$bd = new Conexao();
		$con = $bd->getConexao();
		
		//Envio da valor da pergunta, tipo da pesquisa e da pergunta  
		$sql_pr= "update Respostas set fk_Tp_pesquisa = (select max(Id_pesquisa) from Pesquisa) where Id_resposta =(select max(Id_resposta) from Respostas);";
		$pr= $con->prepare($sql_pr); 
		$pr_resultado = $pr->execute();

		$sql_tp= "INSERT INTO Pesquisa(Tp_pesquisa) VALUE ('CSAT')";
		$tp= $con->prepare($sql_tp); 
		$tp_resultado = $tp->execute();
		
		$sql = "INSERT INTO Respostas(Vlr_resposta, Email_resposta,Dt_nasc) VALUES (?, ?, ?)";
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $c->getCsat());
		$stm->bindValue(2, $c->getEmaicsat());
		$stm->bindValue(3, $c->getDtcsat());
	

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

		// Condição do execute, se ele funcionar a resposta foi enviada 
		if($resultado){
			?>
			   <script> alert('Sua resposta foi enviada com Sucesso!')
			   javascript:window.location='PesquisaCsat.php'
			   </script>
			   <?php }else{ ?>
				   <script> alert('Sua resposta foi enviada com Sucesso!')</script> <?php
			  }
	}
}
?>