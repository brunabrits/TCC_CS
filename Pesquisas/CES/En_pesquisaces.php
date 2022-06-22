<?php 
// Aqui ele envia as respostas para o banco 
include '../../Cadastro/conexao.php';

class En_pesquisa
{
	public function incluir(ValCes $s){

		$bd = new Conexao();
		$con = $bd->getConexao();
		
		$sql = "INSERT INTO Respostas(Vlr_resposta, Email_resposta,Dt_nasc) VALUES (?,?,?)";
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $s->getCes());
		$stm->bindValue(2, $s->getEmaices());
		$stm->bindValue(3, $s->getDtces());
		$resultado = $stm->execute();

		$ces =$_GET['ces'];

		if ($ces ==5)
		{	//Muito Dificil 
			$sql_md = "INSERT INTO Ces(Tp_ces_md) VALUES (1)";
			$vlr = $con->prepare($sql_md);
		}
		else if($ces ==4)
		{	//Dificil
			$sql_d = "INSERT INTO Ces(Tp_ces_d) VALUES (1)";
			$vlr = $con->prepare($sql_d);
		}
		else if ($ces ==3)
		{	//Neutro
			$sql_n = "INSERT INTO Ces(Tp_ces_n) VALUES (1)";
			$vlr = $con->prepare($sql_n);
		}
		else if ($ces ==2)
		{	//Facil
			$sql_f = "INSERT INTO Ces(Tp_ces_f) VALUES (1)";
			$vlr = $con->prepare($sql_f);
		}
		else if ($ces ==1)
		{	//Muito Facil
			$sql_mf = "INSERT INTO Ces(Tp_ces_mf) VALUES (1)";
			$vlr = $con->prepare($sql_mf);
		}
		else
		{
			echo("ERRO");
		}

		$vlr_resultado = $vlr->execute();

		//Envio da valor da pergunta, tipo da pesquisa e da pergunta
		$sql_tp= "INSERT INTO Pesquisa(Tp_pesquisa) VALUE ('CES')";
		$tp= $con->prepare($sql_tp); 
		$tp_resultado = $tp->execute();

		$sql_pr= "UPDATE Respostas SET fk_Tp_pesquisa = (SELECT MAX(Id_pesquisa) FROM Pesquisa) WHERE Id_resposta =(SELECT MAX(Id_resposta) FROM Respostas);";
		$pr= $con->prepare($sql_pr); 
		$pr_resultado = $pr->execute();

		

		// Condição do execute, se ele funcionar a resposta foi enviada 
		if($resultado){
			?>
			   <script> alert('Sua resposta foi enviada com Sucesso!')
			   javascript:window.location='PesquisaCes.php'
			   </script>
			   <?php }else{ ?>
				   <script> alert('Sua resposta foi enviada com Sucesso!')</script> <?php
			  }
	}
}
?>