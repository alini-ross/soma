<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Depoimento</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Editar Depoimento</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/editar-depoimento/<?=$depoimento['id']?>/action" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$depoimento['id']?>">
    <input type="hidden" name="audio-antigo" value="<?=$depoimento['audio']?>">
    <input type="hidden" name="imagem-antiga" value="<?=$depoimento['foto']?>">

    <div class="row">
      <div class="col-md-7">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Nome</label>
              <input type="text" id="inputName" class="form-control" name="nome" value="<?=$depoimento['nome']?>">
            </div>
            <div class="form-group">
              <label for="inputDescription">Conteúdo do depoimento</label>
              <textarea rows="5" id='editor' name="conteudo" ><?=$depoimento["conteudo"]?></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Áudio</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="box box-warning" style="margin-bottom:25px;">
                <div class="box-body">
                  <div class="row">
                    <?php $temDestaque = (isset($depoimento['audio']) and $depoimento['audio'] != '' ) ? true : false; if ($temDestaque){ ?>
                      <div class="col-md-12">
                        <div class="img-item">
                          <audio controls="" name="media"><source src="<?=$depoimento['audio']?>" type="audio/mpeg">
                          </audio>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <input type="file" name="audio">
                      </div>
                    <?php } else{ ?>
                      <div class="col-md-12">
                        <input type="file" name="audio">
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-primary card-outline">
          <div class="form-group">
            <div class="card-header with-border">
              <h3 class="card-title">Foto</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <?php $temDestaque = (isset($depoimento['foto']) and $depoimento['foto'] != '' ) ? true : false; if ($temDestaque){ ?>
                  <div class="col-md-12">
                    <div class="img-item">
                      <img style="margin-bottom:25px; max-width: 100%;"  class="scale-with-grid imagem-destaque" src="<?=$depoimento['foto']?>">
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
                <input type="submit" value="Alterar Depoimento" class="btn btn-success">
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </form>
</section>

