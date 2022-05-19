<?php
session_start();
include('verifica_login.php');
?>

<h2>olá, <?php echo $_SESSION['email'];?></h2>
<h2><a href="logout.php">Sair</a></h2>