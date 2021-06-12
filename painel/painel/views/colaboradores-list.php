<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Colaboradores</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/">Home</a></li>
          <li class="breadcrumb-item active">Colaboradores</li>
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
      <h3 class="card-title">Colaboradores</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th class="text-center">Ordem</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Cargo</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($colaboradores as $colaborador){ ?> 
            <tr>
              <td class="text-center"><?=$colaborador["id"]?></td>
              <td class="text-center"><?=$colaborador["nome"]?></td>
              <td class="text-center"><?=$colaborador["cargo"]?></td>
              <td class="text-center"><img class="img-fluid pad" style="max-width: 50%;max-height: 200px; margin: 0 auto;" src="<?=$colaborador["imagem"]?>"></td>
              <td class="text-center project-actions">
                <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> Ver</a>
                <a class="btn btn-info btn-sm" href="<?=$actual_link?>/painel/editar-colaborador/<?=$colaborador["id"]?>"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a class="btn btn-danger btn-sm" href="<?=$actual_link?>/painel/apagar-colaborador/<?=$colaborador["id"]?>"><i class="fas fa-trash"></i> Apagar</a>
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
