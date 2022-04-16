<?php

if(isset($_POST['email'])) && !empty($_POST['email']){

$nome = addslashes($_POST['name'])
$email = addslashes($_POST['email'])
$mensagem = addslashes($_POS['message'])

$to = "everton.debortoli@gmail.com"
$subject = "Contato - Unimanuntenção"
$body = "Nome: ".$none. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "from: Everton.debortoli@gmai.com"."\r\n".
          "Replay-To:".$email."\e\n". 
          "X=Mailer:PHP/".phpversion();
          
if(mail($to,$subject,$body,$header)){
    
    echo("Email enviado com sucesso")

}else{

    echo("O email não foi enviado")";"
    }
}
?>