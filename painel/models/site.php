<?php
class SiteModel
{

	var $result;
	var $conn;
	var $dados;


	function __construct($dados)
	{
		require_once("./bd/connection.php");
		$Oconn = new ConnectClass();
		$Oconn->openConnect($dados);
		$this->conn = $Oconn->getConnect();
		$this->dados = $dados;
	}

	public function listdepoimentos()
	{
		$sql = "SELECT * FROM depoimentos;";
		return $this->result = $this->conn->query($sql);
	}

	public function listequipamentos()
	{
		$sql = "select * from equipamentos order by id asc;";
		return $this->result = $this->conn->query($sql);
	}

	public function listprojetos($limit)
	{
		$sql = "select id from projetos order by id asc limit $limit;";
		return $this->result = $this->conn->query($sql);
	}

	public function listcategorias(){
		$sql = "SELECT DISTINCT categorias FROM projetos;";
		// $categorias = array();
		// while ($line = $this->result->fetch_assoc()) {
		// 	array_push($categorias, $line);
		// }
		// return $categorias;
		return $this->result = $this->conn->query($sql);
	}
	
	public function projeto($id)
	{
		$sql = "select * from projetos where id = $id;";
		$this->result = $this->conn->query($sql);
		$projeto = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($projeto, $line);
		}
		return $projeto[0];
	}

	public function listprojetoshome()
	{
		$sql = "select * from projetos order by id asc;";
		return $this->result = $this->conn->query($sql);
	}

	public function countprojetos()
	{
		$sql = "select count(*) as total from projetos;";
		$this->result = $this->conn->query($sql);
		$count = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($count, $line);
		}
		return $count[0];
	}
	
	public function projetofotos($id)
	{
		$sql = "select * from fotos WHERE fotos.id_projeto = $id order by id;";
		$this->result = $this->conn->query($sql);
		$fotos = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($fotos, $line);
		}
		return $fotos;
	}

	public function projetosfotosfooter($limit){
		$sql = " SELECT * FROM fotos ORDER BY RAND() LIMIT $limit;";
		$this->result = $this->conn->query($sql);
		$fotos = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($fotos, $line);
		}
		return $fotos;
	}

	public function colaboradores(){
		$sql = " SELECT * FROM colaboradores;";
		$this->result = $this->conn->query($sql);
		$colaboradores = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($colaboradores, $line);
		}
		return $colaboradores;
	}

	public function countpaginas($limit, $where)
	{
		if (strpos($where, 'where') != true) {
			if (strlen($where) > 10) {
				$where = ' where ' . $where;
			}
		}
		$sql = "select count(*) as total from imoveis $where;";
		$this->result = $this->conn->query($sql);
		$count = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($count, $line);
		}
		return $count[0];
	}
	
	public function listconfiguracoes()
	{
		$sql = "select * from configuracoes;";
		$this->result = $this->conn->query($sql);
		$conf = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($conf, $line);
		}
		return $conf[0];
	}
	public function adicionarcontato($dados)
	{
		if ($dados["lb"] !== "") {
			return "spam";
		} else {
			$dados['conteudo'] = '';
			if ($dados["assunto"] == 'Trabalhe conosco teste'){
				echo "files: ";
				print_r($_FILES);

				return "spam";

			}else{
				if ($dados["assunto"] == 'Contato'){
					$dados['conteudo'] = $dados['mensagem'];
				}

				if ($dados["assunto"] == 'Trabalhe conosco'){
					if (is_uploaded_file($_FILES['curriculo']['tmp_name'])) {
						$path = $_FILES['curriculo']['name'];
						$ext = pathinfo($path, PATHINFO_EXTENSION);
						$check_file = false;
						switch ($ext) {
							case 'docx':
							$check_file = true;
							break;

							case 'pdf':
							$check_file = true;
							break;

							default:
							return "spam";
							break;
						}
						if($check_file){
							$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/arquivos/';
							$arraynome = array_reverse(explode('.', basename(str_replace(' ', '_', $_FILES['curriculo']['name']))));
							$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'.$ext;
							if(move_uploaded_file($_FILES['curriculo']['tmp_name'], $uploadfile)){
								$url = $this->dados->site_url() . 'arquivos/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.' .$ext;
								$sql = "INSERT INTO arquivos SET nome = '{$_POST['nome']}', url = '{$url}';";
								$this->result = $this->conn->query($sql);
							}
						}
					}
					$dados['conteudo'] = $dados['mensagem'].'</br> Url do arquivo:  '.$url;
				}
			} 

			$sql = "INSERT INTO contatos SET nome = '{$dados['nome']}', email = '{$dados['email']}', assunto = '{$dados['assunto']}', mensagem = '{$dados['conteudo']}'; ";
			return $this->result = $this->conn->query($sql);
		}
	}	

	public function enviaemail($dados)
	{
		require_once ($_SERVER['DOCUMENT_ROOT'].'vendor/autoload.php');
		require_once ($_SERVER['DOCUMENT_ROOT'].'controllers/mailer/src/PHPMailer.php');
		require_once ($_SERVER['DOCUMENT_ROOT'].'controllers/mailer/src/Exception.php');
		require_once ($_SERVER['DOCUMENT_ROOT'].'controllers/mailer/src/OAuth.php');
		require_once ($_SERVER['DOCUMENT_ROOT'].'controllers/mailer/src/PHPMailer.php');
		require_once ($_SERVER['DOCUMENT_ROOT'].'controllers/mailer/src/POP3.php');
		require_once ($_SERVER['DOCUMENT_ROOT'].'controllers/mailer/src/SMTP.php');

		$mail = new PHPMailer();
		try {
			// print_r($dados);
			$mail->SMTPDebug = 0;

			$mail->isSMTP();
			$mail->Host = 'smtp.umbler.com';
			$mail->SMTPAuth = true;
			//$mail->SMTPSecure = 'tls';
			$mail->Username = $this->dados->email_de_envio(); 
			$mail->Password = $this->dados->email_de_envio_pass(); 
			$mail->Port = 587;
			$mail->isHTML(true);


			$emailRem =  "email";
			$mensagem = '';
			if (!empty($dados['assunto'])) {
				$mensagem .= "<b>Assunto: </b>" . utf8_decode($dados['assunto']) . "<br>";
			}
			if (!empty($dados['nome'])) {
				$mensagem .= "<b>Nome: </b>" . utf8_decode($dados['nome']) . "<br>";
			}
			if (!empty($dados['email'])) {
				$mensagem .= "<b>Email: </b>" . utf8_decode($dados['email']) . "<br>";
			}

			if ($dados["assunto"] == 'Trabalhe conosco'){
				$arraynome = array_reverse(explode('.', basename(str_replace(' ', '_', $_FILES['curriculo']['name']))));
				$url = $this->dados->site_url() . 'arquivos/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];

				$mensagem .= utf8_decode("<b>Conteúdo da mensagem:</b> ") . utf8_decode($dados['mensagem']). "<br>";
				$mensagem .= utf8_decode("<b>Arquivo Curriculo:</b> <a href='$url'>") . $url . "</a>";
				$mail->addAddress($this->dados->email_de_recebimento());

			}else{
				$mensagem .= utf8_decode("<b>Conteúdo da mensagem:</b> ") . utf8_decode($dados['mensagem']);
				$mail->addAddress($this->dados->email_de_recebimento());

			}

			$mail->setFrom($this->dados->email_de_envio(), "Mensageiro");

			foreach ($this->dados->emails_copia() as $email) {
				$mail->AddCC($email);
			}

			$mail->isHTML(true);


			$mail->Subject = utf8_decode($dados['assunto']);
			$mail->Body    = nl2br($mensagem);
			$mail->AltBody = nl2br(strip_tags($mensagem));
			$mail->send();
		} catch (Exception $e) {
			echo $e;
		}
	}

	public function result()
	{
		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$decode = json_decode($response, true);
			return $decode;
		}
	}
}
