<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Adicionar Equipamento</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Adicionar Equipamento</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/adicionar-equipamento/action" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="titulo">Nome</label>
              <input type="text" required id="titulo" class="form-control" name="nome">
            </div>
            <div class="form-group">
              <label for="data">Peso</label>
              <input type="text" required id="data" class="form-control" name="peso">
            </div>
            <div class="form-group">
              <label for="data">Potência</label>
              <input type="text" required id="data" class="form-control" name="potencia">
            </div>
            <div class="form-group">
              <label for="inputDescription">Caracteristicas </label>
              <textarea rows="5" id='editor' name="caracteristicas" ></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-primary card-outline">
          <div class="form-group">
            <div class="card-header with-border">
              <h3 class="card-title">Imagem</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <?php $temDestaque = (isset($item['imagem']) and $item['imagem'] != '' ) ? true : false; if ($temDestaque){ ?>
                  <div class="col-md-12">
                    <div class="img-item">
                      <img style="margin-bottom:25px; max-width: 100%;"  class="scale-with-grid imagem-destaque" src="<?=$item['imagem']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="file" name="imagem">
                  </div>
                <?php } else{ ?>
                  <div class="col-md-12">
                    <input type="file" name="imagem">
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group">
              <div class="text-left">
                <a href="<?=$actual_link?>/painel/" class="btn btn-secondary">Cancelar</a>
                <input type="submit" value="Adicionar Equipamento" class="btn btn-success">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
