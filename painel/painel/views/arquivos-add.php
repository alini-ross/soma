<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Arquivo</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Adicionar Arquivos</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/adicionar-arquivos/action" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-7">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group">
              <label for="cliente">Cliente</label>
              <select class="form-control" required id="cliente" class="form-control" name="cliente_id" >
                <?php foreach ($clientes as $cliente) { ?>
                  <option value="<?=$cliente['id']?>"><?=$cliente['nome']?></option>
                <?php } ?> 
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Arquivos</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="box box-warning" style="margin-bottom:10px;">
                <div class="box-body"> 
                  <div class="form-group">
                    <div class="col-md-12">
                      <input id="arquivos" type="file" name="arquivos[]" multiple="">
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
                <input type="submit" value="Adicionar Arquivos" class="btn btn-success">
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </form>
</section>

