<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: entrar.php');
    exit();
}