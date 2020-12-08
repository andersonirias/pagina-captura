<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if (empty($_POST['nome'])) {
  header("Location: /newsletter.php?res=falha"); 
  exit();
}
  
if (empty($_POST['email'])) {
  header("Location: /newsletter.php?res=falha"); 
  exit();
}

$mail = new PHPMailer(true);

try {                                
  $mail->isSMTP();                                    
  $mail->Host       = 'smtp.meuservidor.com.br';  

  $mail->SMTPAuth   = true;
  $mail->SMTPSecure = false;
  $mail->SMTPAutoTLS = false;
        
  $mail->Username   = 'meuemail@meuservidor.com.br';               
  $mail->Password   = 'senhadoemail';  
  $mail->Port       = 587;        
  $mail->CharSet = 'UTF-8';                           

  $mail->setFrom('meuemail@meuservidor.com.br', 'Cadastro Newsletter');
  $mail->addAddress('meuemail@meuservidor.com.br');   
  $mail->isHTML(true);               
              
  $mail->Subject = 'Cadastro em Newsletter';
  $mail->Body    = 'Bom dia,<br/><br/>Cadastro na Newsletter.<br/><br/>
  <b>Nome: </b>'     . $_POST['nome'] . '<br/>
  <b>Email: </b>'    . $_POST['email'] . '<br/>';

  $mail->send();
  $res = 'sucesso';
} catch (Exception $e) {
  $res = 'falha';
}

header("Location: /newsletter.php?res=" . $res); 
exit();
