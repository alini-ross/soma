<?php 
ini_set('session.gc_maxlifetime', 3600);

session_set_cookie_params(3600);

$url = (isset($_GET['url'])) ? $_GET['url']:'painel';
$url = array_filter(explode('/',$url));
// print_r($url);
// print_r($_GET);

require_once("controllers/painel.php");
$painel = new PainelController();
$painel -> index();






