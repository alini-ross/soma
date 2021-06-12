<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Projetos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Projetos</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Projetos</h3>
    </div>
    <div class="card-body">
      <table id="projetos-lista" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Título</th>
            <th>categorias</th>
            <th>Local</th>
            <th>Imagem</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($projetos as $projeto){?> 
            <tr>
              <td class="text-center"><?=$projeto["titulo"]?></td>
              <td class="text-center"><?=$projeto["categorias"]?></td>
              <td class="text-center"><?=$projeto["local"]?></td>
              <td class="text-center"><img class="img-fluid pad" style="max-width: 50%;" src="<?=$projeto["fotoprincipal"]?>"></td>
              <td class="text-center project-actions">
                <button class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> Ver</button>
                <a class="btn btn-info btn-sm" href="<?=$actual_link?>/painel/editar-projeto/<?=$projeto["id"]?>"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a class="btn btn-danger btn-sm" href="<?=$actual_link?>/painel/apagar-projeto/<?=$projeto["id"]?>"><i class="fas fa-trash"></i> Apagar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Título</th>
            <th>categorias</th>
            <th>Local</th>
            <th>Imagem</th>
            <th>Ações</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</section>

