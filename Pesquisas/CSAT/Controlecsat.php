<?php

include 'En_pesquisacsat.php'; // esse é tipo o clienteDao com as configurações do banco 
include 'ValCsat.php'; // esse seria o cliente, com os gets e sets


$nomecsat =$_GET['nomecsat'];
$dtcsat =$_GET['dtcsat'];
$emaicsat =$_GET['emaicsat'];
$csat =$_GET['csat'];
$botao = $_GET['botao'];

$Valcsat = new ValCsat(); 
$En_pesquisacsat = new En_pesquisa();

$Valcsat->setNomecsat($nomecsat);
$Valcsat->setDtcsat($dtcsat);
$Valcsat->setEmaicsat($emaicsat);
$Valcsat->setCsat($csat);

if($botao=="Enviar"){
   $En_pesquisacsat->incluir($Valcsat);
}
?>