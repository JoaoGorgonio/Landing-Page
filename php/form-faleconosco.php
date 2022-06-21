<?php

require_once ('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
include('connection.php');

date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$date_email  = date('d/m/Y H:i');

$date  = date('Y-m-d');
$time  = date('H:i');

try
{
     $stmt = $conn->prepare("INSERT INTO tb_fale_conosco (
          nm_usuario, 
          cd_email, 
          cd_telefone, 
          ds_mensagem
     ) 
     
     VALUES (
          :nome, 
          :email, 
          :telefone, 
          :mensagem 
     )");

     $stmt->bindValue(':nome',$nome);
     $stmt->bindValue(':email',$email);
     $stmt->bindValue(':telefone',$telefone);
     $stmt->bindValue(':mensagem',$mensagem);
     $stmt->execute();

     $gid = $conn->prepare("SELECT MAX(cd_formulario) FROM `tb_fale_conosco`");
     $gid->execute();

     $getid = $gid->fetchColumn();                              
}
     catch(PDOException $Exception)
     {
          throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
     }

$body  = "
<table border=0 cellspacing='7' cellpadding='7' >
  <tr bgcolor='#f8f8f8'>
    <td colspan='4'>
      <center>
        <font face= 'Arial, Helvetica, sans-serif' size='3'><b>Formulário de Contato - Limongi</b></font>
      </center>
    </td>
  </tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Data:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$date_email."</font> </td></tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Nome:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$nome."</font> </td></tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Email:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$email."</font> </td></tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Telefone:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$telefone."</font> </td></tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Mensagem:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$mensagem."</font> </td></tr>";

$mail = new PHPMailer();

     //Define os dados do servidor e tipo de conexão

     $mail->IsSMTP(); // Define que a mensagem será SMTP
     $mail->Port = 587;
     $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
     $mail->SMTPAuth = true; // Autenticação
     $mail->Username = 'email@email.com'; // Usuário do servidor SMTP
     $mail->Password = 'senha'; // Senha da caixa postal utilizada
     $mail->SMTPSecure = 'tls';    // SSL REQUERIDO pelo GMail
     
     //Define o remetente
     $mail->From = "email@email.com";
     $mail->FromName = "Limongi - Técnica SIM";

     $mail->AddAddress('email@email.com', 'Técnica SIM');

     //Define os dados técnicos da Mensagem
     $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
     $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

     //Texto e Assunto
     $mail->Subject  = "C | Fale Conosco  Nº ".$getid." Limongi - Técnica SIM"; // Assunto da mensagem
     $mail->Body = $body;
     $mail->AltBody  = "C | Fale Conosco  Nº ".$getid." Limongi - Técnica SIM";

     //Envio da Mensagem
     $enviado = $mail->Send();

     //Limpa os destinatários e os anexos
     $mail->ClearAllRecipients();
     $mail->ClearAttachments();

     if($enviado){
          echo "1";
     }
     else
     {
          echo "0";
     }
?>
