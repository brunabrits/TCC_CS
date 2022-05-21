<?php

include 'En_pesquisaces.php'; // esse é tipo o clienteDao com as configurações do banco 
include 'ValCes.php'; // esse seria o cliente, com os gets e sets


$nomeces =$_GET['nomeces'];
$dtces =$_GET['dtces'];
$emaices =$_GET['emaices'];
$ces =$_GET['ces'];
$botao = $_GET['botao'];

$Valces = new ValCes(); 
$En_pesquisaces = new En_pesquisa();

$Valces->setNomeces($nomeces);
$Valces->setDtces($dtces);
$Valces->setEmaices($emaices);
$Valces->setCes($ces);

if($botao=="Enviar"){
   $En_pesquisaces->incluir($Valces);
}
?>