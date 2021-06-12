<?php  

require_once '/home/novatorres.com.br/vendor/autoload.php';
require_once 'https://novatorres.com.br/controllers/mailer/src/PHPMailer.php';
require_once 'https://novatorres.com.br/controllers/mailer/src/Exception.php';
require_once 'https://novatorres.com.br/controllers/mailer/src/OAuth.php';
require_once 'https://novatorres.com.br/controllers/mailer/src/PHPMailer.php';
require_once 'https://novatorres.com.br/controllers/mailer/src/POP3.php';
require_once 'https://novatorres.com.br/controllers/mailer/src/SMTP.php';

$mail = new PHPMailer();
try {
	echo "mailer";
	print_r($dados);

	$mail->SMTPDebug = 0;                           

	$mail->isSMTP();
	$mail->Host = 'smtp.umbler.com';
	$mail->SMTPAuth = true;
	//$mail->SMTPSecure = 'tls';
	$mail->Username = 'mail@construtoraks.com.br';
	$mail->Password = 'Senha@2019';
	$mail->Port = 587;
	$mail->isHTML(true);


	$emailRem = "email";
	$mensagem .= "Assunto: ".utf8_decode($dados['assunto'])."<br>";
	$mensagem =  "Nome: ".utf8_decode($dados['nome'])."<br>";
	$mensagem .= "Telefone: ".utf8_decode($dados['telefone'])."<br>";
	$mensagem .= "Email: ".utf8_decode($dados['email'])."<br>";

	if(!empty($dados['formacontato']))
		$dados['conteudo'].='<br>Gostaria de ser contatado por: '.$dados['formacontato'];

	if ($dados["assunto"]=='Anuncie seu imóvel')
		$dados['conteudo'].= '<br>array de fotos';

	if ($dados["assunto"]=='Receber novidades')
		$dados['conteudo'].= '<br>Se inscreveu pelo formulário Quero receber novidades';

	if ($dados["assunto"]=='Receber novidades')
		$dados['conteudo'].= '<br>Se inscreveu pelo formulário Quero receber novidades';

	$mensagem .= utf8_decode("Conteúdo: ").utf8_decode($dados['conteudo']);


	$mail->setFrom('mail@construtoraks.com.br', "Mensageiro Nova Torres");
	// $mail->addAddress('contato@construtoraks.com.br');
	$mail->AddCC('diogo1@hugsagencia.com.br', 'Diogo1');
	$mail->AddCC('diogo2@hugsagencia.com.br', 'Diogo2');
	$mail->addAddress('diogo@hugsagencia.com.br');


	$mail->isHTML(true);


	$mail->Subject = $assunto;
	$mail->Body    = nl2br($mensagem);
	$mail->AltBody = nl2br(strip_tags($mensagem));
	echo ($mail-> send());
} catch (Exception $e) {

	echo $e;
}