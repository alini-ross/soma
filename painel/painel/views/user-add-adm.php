<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Adicionar Usuário</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Adicionar Usuário</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/adicionar-usuario/action" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Nome</label>
              <input type="text" required id="inputName" class="form-control" name="nome">
            </div>
            <div class="form-group">
              <label for="inputName">Login</label>
              <input type="text" required id="inputName" class="form-control" name="login">
            </div>
            <div class="form-group">
              <label for="inputName">Senha</label>
              <input type="text" required id="inputName" class="form-control" name="senha">
            </div>
            <div class="form-group">
              <label for="inputName">Tipo de usuário</label>
              <select class="form-control" required id="tipo" class="form-control" name="tipo" >
                <option value="cliente">Cliente</option>
                <option value="colaborador">Colaborador</option>
                <option value="admin">Administrador do sistema</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <input type="submit" value="Adicionar Usuário" class="btn btn-success float-right">
      </div>
    </div>
  </form>
</section>
