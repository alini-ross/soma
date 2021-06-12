<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Projeto</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Editar Projeto</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/editar-projeto/<?=$projeto['id']?>/action" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$projeto['id']?>">
    <input type="hidden" name="fotoprincipal-antigo" value="<?=$projeto['fotoprincipal']?>">
    <div class="row">
      <div class="col-md-7">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group">
              <label for="titulo">Título</label>
              <input type="text" id="titulo" class="form-control" name="titulo" value="<?=$projeto['titulo']?>">
            </div>
            <div class="form-group">
              <label for="inputDescription">Descrição do projeto</label>
              <textarea rows="5" id='editor' name="descricao" ><?=$projeto["descricao"]?></textarea>
            </div>
          </div>
        </div>
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Detalhes</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="local">Nome do local</label>
              <input type="text" id="local" class="form-control" name="local" value="<?=$projeto['local']?>">
            </div>
            <div class="form-group">
              <label for="duracao">Duração</label>
              <input type="text" id="duracao" class="form-control" name="duracao" value="<?=$projeto['duracao']?>">
            </div>
            <div class="form-group">
              <label for="cliente">Cliente</label>
              <input type="text" id="cliente" class="form-control" name="cliente" value="<?=$projeto['cliente']?>">
            </div>
            <div class="form-group">
              <label for="categorias">Categoria do projeto</label>
              <input type="text"  id="categorias" class="form-control" name="categorias" value="<?=$projeto['categorias']?>">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Imagens</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="box box-warning" style="margin-bottom:10px;">
                <div class="box-body">
                 <div class="form-group">
                  <label>Destaque</label>
                </div>
                <div class="row">
                  <?php $temDestaque = (isset($projeto['fotoprincipal']) and $projeto['fotoprincipal'] != '' ) ? true : false; if ($temDestaque){ ?>
                    <div class="col-md-12">
                      <div class="img-item">
                        <img width="200" src="<?=$projeto['fotoprincipal']?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <input type="file" name="fotoprincipal">
                    </div>
                  <?php } else{ ?>
                    <div class="col-md-12">
                      <input type="file" name="fotoprincipal">
                    </div>
                  <?php }?>
                </div>
                <div class="form-group">
                  <label for="galeria">Galeria</label>
                  <div class="col-md-12 galeria-projeto">
                    <?php foreach ($fotos as $foto) { ?>
                      <div class="item">
                        <img width="200" src="<?=$foto['url']?>">
                        <a class="delete" target="_blank" href="<?=$actual_link?>/painel/apagar-foto/<?=$foto['id']?>">X</a>
                      </div>
                    <?php } ?>
                  </div>
                  <div class="col-md-12">
                    <input id="galeria" type="file" name="galeria[]" multiple="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-primary card-outline">
        <div class="card-body">
          <div class="form-group">
            <div class="text-left">
              <a href="<?=$actual_link?>/painel/" class="btn btn-secondary">Cancelar</a>
              <input type="submit" value="Alterar Projeto" class="btn btn-success">
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</form>
</section>

