<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Colaborador</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Editar Colaborador</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/editar-colaborador/<?=$colaborador['id']?>/action" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="imagem-antiga" value="<?=$colaborador['imagem']?>">
    <input type="hidden" name="id-antiga" value="<?=$colaborador['id']?>">

    <div class="row">
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="id">Ordem</label>
              <input type="number" required id="id" class="form-control" name="id" value="<?=$colaborador['id']?>">
            </div>
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" required id="nome" class="form-control" name="nome" value="<?=$colaborador['nome']?>">
            </div>
            <div class="form-group">
              <label for="cargo">Cargo</label>
              <input type="text" required id="cargo" class="form-control" name="cargo" value="<?=$colaborador['cargo']?>">
            </div>
            
            
           <!--  <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" required id="status" class="form-control" name="status" >
                <option value="Ativo" <?=$colaborador['status']=="Ativo" ?'selected' : ''?>>Ativo</option>
                <option value="Inativo" <?=$colaborador['status']=="Inativo" ?'selected' : ''?>>Inativo</option>
              </select>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-primary card-outline">
          <div class="form-group">
            <div class="card-header with-border">
              <h3 class="card-title">Foto</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <?php $temDestaque = (isset($colaborador['imagem']) and $colaborador['imagem'] != '' ) ? true : false; if ($temDestaque){ ?>
                  <div class="col-md-12">
                    <div class="img-item">
                      <img style="margin-bottom:25px; max-width: 100%;"  class="scale-with-grid imagem-destaque" src="<?=$colaborador['imagem']?>">
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
                <input type="submit" value="Alterar Colaborador" class="btn btn-success">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
