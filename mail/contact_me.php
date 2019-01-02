<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||   
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Nenhum argumento fornecido!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
if(!empty($_POST['phone'])){
   $phone = strip_tags(htmlspecialchars($_POST['phone']));
}else{
   $phone="*Não informado";
}
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'indi.devbr@outloook.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato via site de:  $name";
$email_body = "<div>Mensagem de contato do http://indidev.com.br/ recebida.</div>"."<div><br><b><u>Detalhes</u>:</b></div><div><b>Nome:&nbsp;&nbsp;</b>".$name."</div><div><b>E-mail:&nbsp;&nbsp;</b>".$email_address."</div><div><b>Telefone:&nbsp;&nbsp;</b>".$phone."</div><div><b>Mensagem:</b></div><div><code>".$message."</code></div>";
$headers = "From: indi.devbr@outloook.com\n";
$headers .= "Reply-To: $email_address\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

try{
   $enviado = mail($to,$email_subject,$email_body,$headers);
   echo"<script>alert('".$enviado."');</script>";
}
catch(Exception $e){
   echo"<script>alert('".$enviado."');</script>";
   return true;
}

// if ($enviado) {
//    http_response_code(200);
//    $obj = [
//      'code' => 200,
//      'status' => 'Success',
//      'message' => 'E-mail enviado com sucesso!'
//    ];
   
//    header('Location: /?p=success');
//    return true;
//  } else {
//    $masgError = $mail->ErrorInfo;
//    http_response_code(500);
//    $obj = [
//      'code' => 500,
//      'status' => 'Intrenal Server',
//      'message' => 'Não foi possível enviar o e-mail.',
//      'detail:'=> $masgError
//    ];
//    header('Location: /?p=error');
//    return;
//  }
return true;
?>