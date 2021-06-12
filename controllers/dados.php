<?php
class dados
{
	var $bd_host = "mysql743.umbler.com";
	var $bd_user = "bd_allied";
	var $bd_name = "bd_allied";
	var $bd_pass = "_4.9Lvu46ZyX[";
	var $site_url = "https://alliedcontabil.com.br/";
	var $secretkey = "6LeWeuEaAAAAAFpwK3NRRhpxbudix72v5TpA5rZo";
	var $sitekey = "6LeWeuEaAAAAAFYV2KqghufcBlQLw-uNW9iAj9xB";
	var $email_de_envio = "guihaack51@gmail.com";
	var $email_de_envio_pass = "";
	var $email_de_recebimento = "";
	var $emails_copia = array("", "", "");
	// var $site_url_atual = "http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];


	function bd_host()
	{
		return $this->bd_host;
	}
	function bd_user()
	{
		return $this->bd_user;
	}
	function bd_name()
	{
		return $this->bd_name;
	}
	function bd_pass()
	{
		return $this->bd_pass;
	}
	function site_url()
	{
		return $this->site_url;
	}
	function site_url_atual()
	{
		return $this->site_url_atual;
	}
	function secretkey()
	{
		return $this->secretkey;
	}
	function sitekey()
	{
		return $this->sitekey;
	}
	function email_de_envio()
	{
		return $this->email_de_envio;
	}
	function email_de_envio_pass()
	{
		return $this->email_de_envio_pass;
	}
	function email_de_recebimento()
	{
		return $this->email_de_recebimento;
	}
	function emails_copia()
	{
		return $this->emails_copia;
	}
}
