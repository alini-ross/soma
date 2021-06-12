<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Usuário</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Editar Usuário</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/editar-usuario/<?=$user['id']?>/action" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$user['id']?>">
    <div class="row">
      <div class="col-md-8">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Nome</label>
              <input type="text" required id="inputName" class="form-control" name="nome" value="<?=$user['nome']?>">
            </div>
            <div class="form-group">
              <label for="inputName">Login</label>
              <input type="text" required id="inputName" class="form-control" name="login" value="<?=$user['login']?>">
            </div>
            <div class="form-group">
              <label for="inputName">Senha</label>
              <input type="text" id="inputName" class="form-control" name="senha" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="card-body">
              <div class="form-group">
                <div class="text-left">
                  <a href="<?=$actual_link?>/painel/" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" value="Alterar Usuário" class="btn btn-success">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
