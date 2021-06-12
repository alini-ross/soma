<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Equipamentos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Equipamentos</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Equipamentos</h3>
    </div>
    <div class="card-body">
      <table id="projetos-lista" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($equipamentos as $item){?> 
            <tr>
              <td class="text-center"><?=$item["id"]?></td>
              <td class="text-center"><?=$item["nome"]?></td>
              <td class="text-center"><img class="img-fluid pad" style="max-width: 100px;" src="<?=$item["foto"]?>"></td>
              <td class="text-center project-actions">
                <button class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> Ver</button>
                <a class="btn btn-info btn-sm" href="<?=$actual_link?>/painel/editar-equipamento/<?=$item["id"]?>"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a class="btn btn-danger btn-sm" href="<?=$actual_link?>/painel/apagar-equipamento/<?=$item["id"]?>"><i class="fas fa-trash"></i> Apagar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Ações</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</section>

