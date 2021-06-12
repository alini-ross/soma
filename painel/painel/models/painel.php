<?php
class PainelModel
{

	var $result;
	var $conn;
	var $dados;


	function __construct($dados)
	{
		require_once("../bd/connection.php");

		$Oconn = new ConnectClass();
		$Oconn->openConnect($dados);
		$this->conn = $Oconn->getConnect();
		$this->dados = $dados;
	}




	public function listcontatos()
	{
		$sql = "select * from contatos;";
		return $this->result = $this->conn->query($sql);
	}
	public function apagarcontato($id)
	{
		$sql = "delete from contatos where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}
	public function listcolaboradores()
	{
		$sql = "select * from colaboradores";
		return $this->result = $this->conn->query($sql);
	}
	public function adicionarcolaboradoraction()
	{
		$url = '';
		if (isset($_FILES['imagem']['name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['imagem']['name'])));
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
				$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];

			}
		}

		$sql = "INSERT INTO colaboradores SET nome = '{$_POST['nome']}',	cargo = '{$_POST['cargo']}',	imagem = '{$url}' ;";
		return $this->result = $this->conn->query($sql);
	}
	public function editcolaborador($id)
	{
		$sql = "select * from colaboradores where id= '{$id}' ;";
		$this->result = $this->conn->query($sql);
		$colaborador = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($colaborador, $line);
		}
		return $colaborador[0];
	}

	public function editarcolaboradoraction()
	{
		if (isset($_FILES['imagem']['name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['imagem']['name'])));

			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			// $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];

			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile))
				$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];

			else
				$url = $_POST['imagem-antiga'];
		} else if (!isset($url))
		$url = $_POST['imagem-antiga'];
		$sql = "UPDATE colaboradores SET id = '{$_POST['id']}', nome = '{$_POST['nome']}',	cargo = '{$_POST['cargo']}',  imagem = '{$url}' WHERE id = '{$_POST['id-antiga']}' ;";
		return $this->result = $this->conn->query($sql);
	}
	public function apagarcolaborador($id)
	{
		$sql = "delete from colaboradores where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}


	public function listdepoimentos()
	{
		$sql = "select * from depoimentos order by id desc";
		return $this->result = $this->conn->query($sql);
	}
	public function adicionardepoimentoaction()
	{
		if (isset($_FILES['audio']['name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['audio']['name'])));
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
			if (move_uploaded_file($_FILES['audio']['tmp_name'], $uploadfile)) {
				$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];

			}
		} else {
			$url = '';
		}
		if (isset($_FILES['imagem']['name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['imagem']['name'])));
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
				$urlimg = $this->dados->site_url() . '/uploads/' . $arraynome[1] . date("d-m-y") . '.' . $arraynome[0];
			}
		} else {
			$urlimg = '';
		}

		$sql = "INSERT INTO depoimentos SET nome = '{$_POST['nome']}', conteudo = '{$_POST['conteudo']}', audio = '{$url}', foto = '{$urlimg}';";

		return $this->result = $this->conn->query($sql);
	}
	public function editdepoimento($id)
	{
		$sql = "select * from depoimentos where id= " . $id . " ;";
		$this->result = $this->conn->query($sql);
		$depoimento = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($depoimento, $line);
		}
		return $depoimento[0];
	}

	public function editardepoimentoaction()
	{
		if (isset($_FILES['audio']['name'])) {
			if( !empty($_FILES['audio']['name'])){
				$arraynome = array_reverse(explode('.', basename($_FILES['audio']['name'])));
				$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
				$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
				if (move_uploaded_file($_FILES['audio']['tmp_name'], $uploadfile))
					$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];

				else
					$url = $_POST['audio-antigo'];
			} else{
				$url = $_POST['audio-antigo'];
			}
		} else if (!isset($url)){
			$url = $_POST['audio-antigo'];
		}
		if (isset($_FILES['imagem']['name'])) {
			if( !empty($_FILES['imagem']['name'])){
				$arraynome = array_reverse(explode('.', basename($_FILES['imagem']['name'])));
				$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
				$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
				if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile))
					$urlimg = $this->dados->site_url() . '/uploads/' . $arraynome[1] . date("d-m-y") . '.' . $arraynome[0];
				else
					$urlimg = $_POST['imagem-antiga'];
			} else{
				$urlimg = $_POST['imagem-antiga'];
			}
		}else{
			$urlimg = $_POST['imagem-antiga'];
		}
		$sql = "UPDATE depoimentos SET nome = '{$_POST['nome']}', conteudo = '{$_POST['conteudo']}', audio = '{$url}', foto = '{$urlimg}' WHERE id = '{$_POST['id']}' ;";
		echo $sql;
		return $this->result = $this->conn->query($sql);
	}
	public function apagardepoimento($id)
	{
		$sql = "delete from depoimentos where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}



	public function listprojetos()
	{
		$sql = "select * from projetos order by id desc;";
		return $this->result = $this->conn->query($sql);
	}


	public function adicionarprojetoaction()
	{
		if (is_uploaded_file($_FILES['fotoprincipal']['tmp_name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['fotoprincipal']['name'])));
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s").'_principal.'. $arraynome[0];
			if (move_uploaded_file($_FILES['fotoprincipal']['tmp_name'], $uploadfile)) {
				$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s").'_principal.'. $arraynome[0];
			}
		} else {
			$url = '';
		}

		$countfiles = count($_FILES['galeria']['name']);
		$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
		for($i=0;$i<$countfiles;$i++){
			$arraynome = array_reverse(explode('.', basename($_FILES['galeria']['name'][$i])));;
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
			move_uploaded_file($_FILES['galeria']['tmp_name'][$i], $uploadfile);
			print_r($_FILES['galeria']['tmp_name'][$i]);
		}

		$sql = "INSERT INTO projetos SET titulo = '{$_POST['titulo']}', descricao = '{$_POST['descricao']}' ,  duracao = '{$_POST['duracao']}' , local = '{$_POST['local']}' , categorias = '{$_POST['categorias']}' , cliente = '{$_POST['cliente']}', fotoprincipal = '{$url}' ;";

		return $this->result = $this->conn->query($sql);
	}
	public function fotosprojeto($id){
		$sql = "select * from fotos where id_projeto=".$id." ;";
		return $this->result = $this->conn->query($sql);
	}
	public function apagarfotoprojeto($id){
		// echo "aqui";
		$sql = "select url from fotos where id= '{$id}' ;";
		$url = $this->result = $this->conn->query($sql);
		// print_r(unlink ($url));
		$sql = "delete from fotos where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}
	public function editprojeto($id)
	{
		$sql = "select * from projetos where id= " . $id . " ;";
		$this->result = $this->conn->query($sql);
		$projeto = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($projeto, $line);
		}
		return $projeto[0];
	}

	public function editarprojetoaction()
	{
		if (is_uploaded_file($_FILES['galeria']['tmp_name'][0])) {
			$countfiles = count($_FILES['galeria']['name']);
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			for($i=0;$i<$countfiles;$i++){
				$arraynome = array_reverse(explode('.', basename($_FILES['galeria']['name'][$i])));;
				$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
				if(move_uploaded_file($_FILES['galeria']['tmp_name'][$i], $uploadfile)){
					$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
				}
				$sql = "INSERT INTO fotos SET id_projeto = '{$_POST['id']}', url = '{$url}';";
				$this->result = $this->conn->query($sql);
			}
		}
		unset($url); 

		if (is_uploaded_file($_FILES['fotoprincipal']['tmp_name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['fotoprincipal']['name'])));
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'_principal.'. $arraynome[0];
			if (move_uploaded_file($_FILES['fotoprincipal']['tmp_name'], $uploadfile))
				$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s").'_principal.'. $arraynome[0];
			else
				$url = $_POST['fotoprincipal-antigo'];
		} else if (!isset($url))
		$url = $_POST['fotoprincipal-antigo'];

		$sql = "UPDATE projetos  SET titulo = '{$_POST['titulo']}', descricao = '{$_POST['descricao']}' ,  duracao = '{$_POST['duracao']}' , local = '{$_POST['local']}' , categorias = '{$_POST['categorias']}' , cliente = '{$_POST['cliente']}', fotoprincipal = '{$url}' WHERE id = '{$_POST['id']}' ;";
		return $this->result = $this->conn->query($sql);
	}
	public function apagarprojeto($id)
	{
		$sql = "delete from projetos where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}

	public function listequipamentos()
	{
		$sql = "select * from equipamentos order by id desc;";
		return $this->result = $this->conn->query($sql);
	}


	public function adicionarequipamentoaction()
	{
		if (is_uploaded_file($_FILES['imagem']['tmp_name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['imagem']['name'])));
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
				$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];

			}
		} else {
			$url = '';
		}

		$sql = "INSERT INTO equipamentos SET nome = '{$_POST['nome']}', caracteristicas = '{$_POST['caracteristicas']}' , peso = '{$_POST['peso']}', potencia = '{$_POST['potencia']}',  foto = '{$url}' ;";
		echo $sql;
		return $this->result = $this->conn->query($sql);
	}
	
	public function editequipamento($id)
	{
		$sql = "select * from equipamentos where id= " . $id . " ;";
		$this->result = $this->conn->query($sql);
		$equipamento = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($equipamento, $line);
		}
		return $equipamento[0];
	}

	public function editarequipamentoaction()
	{
		if (is_uploaded_file($_FILES['imagem']['tmp_name'])) {
			$arraynome = array_reverse(explode('.', basename($_FILES['imagem']['name'])));
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile))
				$url = $this->dados->site_url() . '/uploads/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
			else
				$url = $_POST['imagem-antiga'];
		} else if (!isset($url))
		$url = $_POST['imagem-antiga'];

		$sql = "UPDATE equipamentos SET  nome = '{$_POST['nome']}', caracteristicas = '{$_POST['caracteristicas']}' , peso = '{$_POST['peso']}', potencia = '{$_POST['potencia']}',  foto = '{$url}'  WHERE id = '{$_POST['id']}' ;";
		return $this->result = $this->conn->query($sql);
	}
	public function apagarequipamento($id)
	{
		$sql = "delete from equipamentos where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}





	public function consultUser($login)
	{
		$sql = "select * from usuarios where login='" . $login . "'";
		$this->result = $this->conn->query($sql);
	}
	public function listusers()
	{
		$sql = "select * from usuarios";
		return $this->result = $this->conn->query($sql);
	}
	public function adicionaruseraction()
	{
		$senha = MD5($_POST['senha']);
		$sql = "INSERT INTO usuarios SET nome = '{$_POST['nome']}',tipo = '{$_POST['tipo']}' , login = '{$_POST['login']}', senha = '{$senha}' ;";
		// echo $sql;
		return $this->result = $this->conn->query($sql);
	}
	public function edituser($id)
	{
		$sql = "select * from usuarios where id= " . $id . " ;";
		$this->result = $this->conn->query($sql);
		$user = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($user, $line);
		}
		return $user[0];
	}

	public function editaruseraction()
	{
		if (isset($_POST['senha'])) {
			$senha = MD5($_POST['senha']);
			$sql = "UPDATE usuarios usuarios SET nome = '{$_POST['nome']}', login = '{$_POST['login']}' , senha = '{$senha}' WHERE id = '{$_POST['id']}' ;";
		} else {
			$sql = "UPDATE usuarios usuarios SET nome = '{$_POST['nome']}', login = '{$_POST['login']}' WHERE id = '{$_POST['id']}' ;";
		}
		return $this->result = $this->conn->query($sql);
	}
	public function apagaruser($id)
	{
		$sql = "delete from usuarios where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}

	public function arquivos($id){
		$sql = "select * from arquivos where id_usuario=".$id." ;";
		// echo $sql;
		return $this->result = $this->conn->query($sql);
	}
	public function apagararquivo($id)
	{
		$sql = "delete from arquivos where id= '{$id}' ;";
		return $this->result = $this->conn->query($sql);
	}

	public function adicionararquivosaction()
	{
		if (is_uploaded_file($_FILES['arquivos']['tmp_name'][0])) {
			$countfiles = count($_FILES['arquivos']['name']);
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/arquivos/';
			for($i=0;$i<$countfiles;$i++){
				$arraynome = array_reverse(explode('.', basename($_FILES['arquivos']['name'][$i])));;
				$uploadfile = $uploaddir . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
				if(move_uploaded_file($_FILES['arquivos']['tmp_name'][$i], $uploadfile)){
					$url = $this->dados->site_url() . '/arquivos/' . $arraynome[1] . '_' . date("d-m-y-i-s") .'.'. $arraynome[0];
				}
				$sql = "INSERT INTO arquivos SET id_usuario = '{$_POST['cliente_id']}', nome = '{$arraynome[1]}', url = '{$url}';";
				$this->result = $this->conn->query($sql);
			}
		}
	}

	public function listararquivos(){
		$sql= "SELECT arquivos.id, arquivos.nome as fnome, arquivos.url, usuarios.nome as nome FROM arquivos INNER JOIN usuarios on arquivos.id_usuario = usuarios.id";
		return $this->result = $this->conn->query($sql);
	}
	


	public function listclientes(){
		$sql = "select * from usuarios where tipo = 'cliente';";
		return $this->result = $this->conn->query($sql);
	}

	public function configuracoes()
	{
		$sql = "select * from configuracoes;";
		$this->result = $this->conn->query($sql);
		$conf = array();
		while ($line = $this->result->fetch_assoc()) {
			array_push($conf, $line);
		}
		return $conf[0];
	}

	public function listequipe()
	{
		$sql = "select * from colaboradores where status = 'ativo';";
		return $this->conn->query($sql);
	}
	public function configuracoesaction()
	{
		if (isset($_FILES['logo_dark']['name'])) {
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . basename($_FILES['logo_dark']['name']);
			if (move_uploaded_file($_FILES['logo_dark']['tmp_name'], $uploadfile))
				$logodark = $this->dados->site_url() . '/uploads/' . $_FILES['logo_dark']['name'];
		}
		if (!isset($logodark)) {
			$logodark =  isset($_POST['logo_dark_old']) ? $_POST['logo_dark_old'] : '';
		}

		if (isset($_FILES['logo']['name'])) {
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$uploadfile = $uploaddir . basename($_FILES['logo']['name']);
			if (move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile))
				$logo = $this->dados->site_url() . '/uploads/' . $_FILES['logo']['name'];
		}
		if (!isset($logo)) {
			$logo =  isset($_POST['logo_old']) ? $_POST['logo_old'] : '';
		}
		$_POST['whats_link'] = addslashes($_POST['whats_link']);




		$sql = "UPDATE configuracoes SET nome='{$_POST['nome']}', whats_link='{$_POST['whats_link']}', keywords='{$_POST['keywords']}',google_tag='{$_POST['google_tag']}',descricao= '{$_POST['descricao']}',email='{$_POST['email']}',telefone='{$_POST['telefone']}',instagram='{$_POST['instagram']}',facebook='{$_POST['facebook']}',logo='{$logo}',logo_dark='{$logodark}';";
		$this->result = $this->conn->query($sql);
	}

	public function getConsult()
	{
		return $this->result;
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
