<?php 
// Aqui ele envia as respostas para o banco 
include '../../Cadastro/conexao.php';

class En_pesquisa
{
	public function incluir(ValCes $s){
		
		$sql = "INSERT INTO Respostas(Vlr_resposta, Email_resposta,Dt_nasc) VALUES (?,?,?)";
		$bd = new Conexao();
		$con = $bd->getConexao();
		$stm = $con->prepare($sql);
		$stm->bindValue(1, $s->getCes());
		$stm->bindValue(2, $s->getEmaices());
		$stm->bindValue(3, $s->getDtces());
	  //$stm->bindValue(1, $s->getNomeces());
		$resultado = $stm->execute();

		$ces =$_GET['ces'];

		if ($ces ==1)
		{	//Muito Dificil 
			$sql_md = "INSERT INTO Ces(Tp_ces_md) VALUES (1)";
			$vlr = $con->prepare($sql_md);
		}
		else if($ces ==2)
		{	//Dificil
			$sql_d = "INSERT INTO Ces(Tp_ces_d) VALUES (1)";
			$vlr = $con->prepare($sql_d);
		}
		else if ($ces ==3)
		{	//Neutro
			$sql_n = "INSERT INTO Ces(Tp_ces_n) VALUES (1)";
			$vlr = $con->prepare($sql_n);
		}
		else if ($ces ==4)
		{	//Facil
			$sql_f = "INSERT INTO Ces(Tp_ces_f) VALUES (1)";
			$vlr = $con->prepare($sql_f);
		}
		else if ($ces ==5)
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
		$sql_vn="INSERT INTO Perguntas(Vlr_pergunta /*, Nm_pergunta*/) VALUE (3 /*,'Em uma escala de 0 a 10, o quanto você indicaria a nossa empresa para um amigo e/ou familiar?'*/)";
		$sql_t= "INSERT INTO Pesquisa(Tp_pesquisa) VALUE ('CES')";
		$vn= $con->prepare($sql_vn); 
		$t= $con->prepare($sql_t); 
		$vn_resultado = $vn->execute();
		$t_resultado = $t->execute();

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