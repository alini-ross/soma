<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$configuracoes['nome']?></title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$actual_link?>/painel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?=$actual_link?>/painel/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=$actual_link?>/painel/dist/css/custom.css">

  <!-- adminlte-->
  <link rel="stylesheet" href="<?=$actual_link?>/painel/dist/css/adminlte.min.css">
  <script src="<?=$actual_link?>/painel/plugins/ckeditor/ckeditor.js"></script>
  <?php 
  $url = (isset($_SERVER["REQUEST_URI"])) ? $_SERVER["REQUEST_URI"]:'painel';
  $url = array_filter(explode('/',$url));
  if(isset($url[2])){
    if($url[2]=='listar-contatos' or $url[2]=='listar-projetos'){?>

      <!-- DataTables -->
      <link rel="stylesheet" href="<?=$actual_link?>/painel/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="<?=$actual_link?>/painel/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="<?=$actual_link?>/painel/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <? }
  } ?>
  <style type="text/css">
    .content-wrapper {
      margin: 0 !important;
    }
  </style>
</head>

<body class="hold-transition">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=$actual_link?>/" target="_blank" class="nav-link"><i class="fas fa-home"></i> Ver site</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=$actual_link?>/painel/sair" class="nav-link"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </li>
      </ul>
    </nav>
    <div class="content-wrapper">