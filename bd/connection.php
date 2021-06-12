<?php
class ConnectClass{
	public $conn;
	public function openConnect($dados){
		$serverName = $dados -> bd_host();
		$user = $dados -> bd_user();
		$pass = $dados -> bd_pass();
		$dbName = $dados -> bd_name();
		$this -> conn = new mysqli($serverName,$user,$pass,$dbName);
		$this-> conn -> set_charset("utf8");

	}

	function getConnect(){
		return $this -> conn;
	}

}

//$conn = mysqli_connect('localhost', 'clientes', '', 'root');

