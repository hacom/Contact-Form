<?php 

if(isset($_POST['email']) && !empty($_POST['email'])) {

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$to = "contato@axioscorp.com.br"; // Endereço de e-mail do destino
$subject = "Contato - AXIOSCORP";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:contato@axioscorp.com.br"."\r\n".
          "Reply-To:".$email."\r\n".
          "X=Mailer:PHP/".phpversion();
        
if(mail($to,$subject,$body,$header)) {
    echo("E-mail enviado com sucesso!");
} 
else {
    echo("Ops. O e-mail não pode ser enviado");
}
}

?>