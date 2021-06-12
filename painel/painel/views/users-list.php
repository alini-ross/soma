<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Usuários</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/painel">Home</a></li>
          <li class="breadcrumb-item active">Usuários</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Usuários</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th>Tipo</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($users as $user){ ?> 
            <tr>
              <td><?=$user["tipo"]?></td>
              <td><?=$user["nome"]?></td>
              <td><?=$user["login"]?></td>
              <td class="project-actions text-left">
                <a class="btn btn-info btn-sm" href="<?=$actual_link?>/painel/editar-usuario/<?=$user["id"]?>"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a class="btn btn-danger btn-sm" href="<?=$actual_link?>/painel/apagar-usuario/<?=$user["id"]?>"><i class="fas fa-trash"></i> Apagar</a>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
