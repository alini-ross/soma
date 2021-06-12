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
</head>

<body class="hold-transition sidebar-mini pace-primary">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=$actual_link?>/" target="_blank" class="nav-link"><i class="fas fa-home"></i> Ver site</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=$actual_link?>/painel/sair" class="nav-link"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-secundary elevation-4">
      <!-- Brand Logo -->
      <a href="<?=$actual_link?>/painel/" class="brand-link" style=" text-align: center;">
        <img width="120" src="<?=$configuracoes['logo']?>">
      </a>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item"><a href="<?=$actual_link?>/painel/" class="nav-link"><i class="nav-icon fas fa-home"></i><p>Home</p></a></li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Equipe<i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview"> 
              <li class="nav-item"><a href="<?=$actual_link?>/painel/listar-colaboradores" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Listar</p></a></li>
              <li class="nav-item"><a href="<?=$actual_link?>/painel/adicionar-colaborador" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Adicionar</p></a></li>
            </ul>
          </li>
          <!-- <li class="nav-item"><a href="<?=$actual_link?>/painel/" class="nav-link"><i class="nav-icon fas fa-th"></i><p>Popups</p></a></li> -->
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-address-book"></i><p>Contatos<i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview"> 
              <li class="nav-item"><a href="<?=$actual_link?>/painel/listar-contatos" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Listar</p></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-home"></i><p>Projetos<i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview"> 
              <li class="nav-item"><a href="<?=$actual_link?>/painel/listar-projetos" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Listar</p></a></li>
              <li class="nav-item"><a href="<?=$actual_link?>/painel/adicionar-projeto" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Adicionar</p></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-stream"></i><p>Arquivos<i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview"> 
              <li class="nav-item"><a href="<?=$actual_link?>/painel/listar-arquivos" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Listar</p></a></li>
              <li class="nav-item"><a href="<?=$actual_link?>/painel/adicionar-arquivos" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Adicionar</p></a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-users-cog"></i><p>Usuários<i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview"> 
              <li class="nav-item"><a href="<?=$actual_link?>/painel/listar-usuarios" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Listar</p></a></li>
              <li class="nav-item"><a href="<?=$actual_link?>/painel/adicionar-usuario" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Adicionar</p></a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">