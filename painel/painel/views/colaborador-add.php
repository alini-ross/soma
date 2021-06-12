<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Adicionar Colaborador</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Adicionar Colaborador</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/adicionar-colaborador/action" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" required id="nome" class="form-control" name="nome">
            </div>
            <div class="form-group">
              <label for="cargo">Cargo</label>
              <input type="text" required id="cargo" class="form-control" name="cargo">
            </div>
            <!-- <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" required id="status" class="form-control" name="status" >
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
              </select>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Foto</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="box box-warning" style="margin-bottom:25px;">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <input type="file" name="imagem">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="card-body">
              <div class="form-group">
                <div class="text-left">
                  <a href="<?=$actual_link?>/painel/" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" value="Adicionar Colaborador" class="btn btn-success">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
