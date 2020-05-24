<?php
// Recebendo Dados pessoais

$name = $_POST["nome"];
$email = $_POST["email"];
$msg = $_POST["mensagem"];



$subject = $_POST["assunto"];;
$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";



// Dados que serão enviados
$message = "<strong>Nome: </strong>".$nome."<br>
<strong>Email: </strong>".$email."<br><br>
<strong>Telefone:</strong>". $msg."<br>"





// Email que receberá a mensagem
$email_to = 'contato@dacda.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $message, $headers);

if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;


?>