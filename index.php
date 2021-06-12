<?php
$url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
$url = array_filter(explode('/', $url));


require_once("controllers/site.php");
$site = new SiteController();
$site->index();
