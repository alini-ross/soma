<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Depoimentos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Depoimentos</li>
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
      <h3 class="card-title">Depoimentos</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 1%" class="text-center">
            </th>
            <th style="width: 30%" class="text-center">
              Nome
            </th>
            <th style="width: 19%" class="text-center">
              Foto
            </th>
            <th style="width: 19%" class="text-center">
              Áudio
            </th>
            <th style="width: 30%" class="text-center">
              Ações
            </th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($depoimentos as $depoimento){ ?> 
            <tr>
              <td class="text-center" ><?=$depoimento["id"]?></td>
              <td class="text-center" ><?=$depoimento["nome"]?></td>
              <td class="text-center" ><small><img style="max-width: 100px;" src="<?=$depoimento["foto"]?>"></small></td>
              <td> 
                <?php if (isset($depoimento['audio']) and $depoimento['audio'] != ''){?>
                <audio controls="" name="media"><source src="<?=$depoimento['audio']?>" type="audio/mpeg">
                </audio>
              <?php } ?>
            </td>
            <td class="text-center project-actions">
              <a class="btn btn-info btn-sm" href="<?=$actual_link?>/painel/editar-depoimento/<?=$depoimento["id"]?>"><i class="fas fa-pencil-alt"></i> Editar</a>
              <a class="btn btn-danger btn-sm" href="<?=$actual_link?>/painel/apagar-depoimento/<?=$depoimento["id"]?>"><i class="fas fa-trash"></i> Apagar</a>
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
