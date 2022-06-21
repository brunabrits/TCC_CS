<?php

$Nome = $_POST["Nome"];
$Email = $_POST["Email"];
$Assunto = $_POST["Assunto"];
$Msg = $_POST["Msg"];

//erros na inclusão da biblioteca 
include 'PHPMailer/PHPMailerAutoload.php';
//require_once("PHPMailerAutoload.php");
// git clone https://github.com/PHPMailer/PHPMailer.git

$mail = new PHPMailer();
$mail->isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "brunabsilva0409@gmail.com";
$mail->Password = "yxyx";

$mail->SetFrom($mail->Username, "Bruna Brito");
$mail->addAddress("brunabsilva0409@gmail.com");
$mail->Subject = $Assunto;

$ConteudoEmail = "Segue comentario do cliente $Nome, Email ($Email) <br><br> $Msg";

$mail->IsHTML(true);
$mail->Body = $ConteudoEmail;

if ($mail->send())
{
    echo "<script> alert('Enviado com sucesso') </script>";
}
else
{
    echo "<script> alert('Ocorreu algum erro no envio') </script>";
}






?>