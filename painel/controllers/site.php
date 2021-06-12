<?php
class SiteController
{

	var $dados;
	var $SiteModel;

	function __construct()
	{

		require_once("dados.php");
		$dados = new dados();
		$this->dados = $dados;

		require_once("models/site.php");
		$this->SiteModel = new SiteModel($dados);
		$site_url_atual = $_SERVER["REQUEST_URI"];
	}

	public function index()
	{
		$actual_link = $this->dados->site_url();

		$url = (isset($_GET['url'])) ? $_GET['url'] : 'em_breve';
		$url = array_filter(explode('/', $url));
		switch ($url[0]) {

			case 'em_breve':
				$this->em_breve();
				break;

			case 'home':
				$this->home();
				break;

			default:
				$this->erro404();
				break;
		}
	}

	public function em_breve()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		require_once("views/em-breve.php");
	}

	public function home()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		require_once("views/header.php");
		require_once("views/home.php");
		require_once("views/footer.php");
	}

	public function erro404()
	{
		$configuracoes = $this->SiteModel->listconfiguracoes();
		require_once("views/header.php");
		require_once("views/404.php");
		require_once("views/footer.php");
	}
	public function painel()
	{
		echo "painel";
		// require_once("http://novatorres-com-br.umbler.net/painel/controllers/index.php");
	}
}
