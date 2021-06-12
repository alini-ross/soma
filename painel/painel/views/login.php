<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $configuracoes['nome'] ?> - Painel</title>

	<link rel="apple-touch-icon" sizes="180x180" href="<?= $actual_link ?>/assets/favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $actual_link ?>/assets/favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $actual_link ?>assets/favicon_io/favicon-16x16.png">
	<link rel="manifest" href="<?= $actual_link ?>/assets/favicon_io/site.webmanifest">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= $actual_link ?>/painel/plugins/fontawesome-free/css/all.min.css">
	<!-- adminlte-->
	<link rel="stylesheet" href="<?= $actual_link ?>/painel/dist/css/adminlte.min.css">
	<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>

</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<div class="logo">
					<img width="300" src="<?= $configuracoes['logo_dark'] ?>">
				</div>
			</div>
			<div class="card-body">
				<p class="login-box-msg">Painel de admnistração</p>

				<form action="vl" method="POST" name="formulario" id="formulario">
					<div class="form-group">
						<label>Usuário</label>
						<input type="type" class="form-control" required name="login" placeholder="Digite o user">
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" class="form-control" required name="senha" placeholder="Digite sua senha">
					</div>
					<div class="form-group">
						<div class="g-recaptcha" data-sitekey="<?= $sitekey ?>"></div>
					</div>
					<!-- <input class="btn btn-primary" type="submit" name="Enviar" value="Fazer Login"> -->
					<button class="btn btn-primary" type="submit" name="enviar">Entrar</button>
				</form>


			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.login-box -->

	<script>
		window.onload = function() {
			let forms = document.forms
			for (let item of forms) {
				item['g-recaptcha-response'].required = true;
				item['g-recaptcha-response'].oninvalid = function(e) {
					alert("Por favor preencha o reCaptcha");
				}
			}
		}
	</script>
	<script src="<?= $actual_link ?>/painel/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= $actual_link ?>/painel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- pace-progress -->
	<!-- AdminLTE App -->
	<script src="<?= $actual_link ?>/painel/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
</body>

</html>