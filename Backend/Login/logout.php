<?php
session_start();

unset($_SESSION["Usuario"],
      $_SESSION["Chave"]);

header('location: ../../../TCC_CS/index.php')


?>