<?php

include 'En_pesquisanps.php'; // esse é tipo o clienteDao com as configurações do banco 
include 'ValNps.php'; // esse seria o cliente, com os gets e sets


$nomenps =$_GET['nomenps'];
$dtnps =$_GET['dtnps'];
$emainps =$_GET['emainps'];
$nps =$_GET['nps'];
$botao = $_GET['botao'];

$Valnps = new ValNps(); // era teste 
$En_pesquisanps = new En_pesquisa();

$Valnps->setNomenps($nomenps);
$Valnps->setDtnps($dtnps);
$Valnps->setEmainps($emainps);
$Valnps->setNps($nps);

if($botao=="Enviar"){
   $En_pesquisanps->incluir($Valnps);
}
?>