<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Adicionar Depoimento</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Adicionar Depoimento</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/adicionar-depoimento/action" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-7">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" id="nome" class="form-control" required  name="nome">
            </div>
            <div class="form-group">
              <label for="inputDescription">Conteúdo do depoimento</label>
              <textarea rows="5" id='editor' name="conteudo" ></textarea>
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
                    <div class="col-md-12">
                      <input type="file" name="audio">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                  <input type="submit" value="Adicionar Depoimento" class="btn btn-success">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>