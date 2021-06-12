<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Configurações</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Configurações</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <form id= "form" role="form" action="<?=$actual_link?>/painel/configuracoes/action" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="logo_old" value="<?=$conf['logo']?>">
    <input type="hidden" name="logo_dark_old" value="<?=$conf['logo_dark']?>">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Meta Tags</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Nome</label>
              <input type="text" id="inputName" class="form-control" name="nome" value="<?=$conf['nome']?>">
            </div>
            <div class="form-group">
              <label for="inputName">Palavras chaves(SEO)</label>
              <textarea class="form-control" name="keywords" class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$conf['keywords']?></textarea>
            </div>
            <div class="form-group">
              <label for="inputDescription">Descrição(SEO)</label>
              <textarea name="descricao" class="textarea" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$conf["descricao"]?></textarea>
            </div>
            <div class="form-group">
              <label for="inputName">Google tag manager</label>
              <input type="text" id="inputName" class="form-control" name="google_tag" value="<?=$conf['google_tag']?>">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-primary card-outline">
          <div class="card-header with-border">
            <h3 class="card-title">Informações da empresa</h3>
          </div>
          <div class="card-body">
            <div class="box box-warning" >
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputName">E-mail</label>
                      <input type="text" id="inputName" class="form-control" name="email" value="<?=$conf['email']?>">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Telefone </label>
                      <input type="text" id="inputName" class="form-control" name="telefone" value="<?=$conf['telefone']?>">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Url Whatsapp</label>
                      <input type="text" id="inputName" class="form-control" name="whats_link" value="<?=$conf['whats_link']?>">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Instagram</label>
                      <input type="text" id="inputName" class="form-control" name="instagram" value="<?=$conf['instagram']?>">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Facebook</label>
                      <input type="text" id="inputName" class="form-control" name="facebook" value="<?=$conf['facebook']?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:25px;">
              <div class="col-md-6">
                <label for="inputName">Logo</label>
                <?php  $temDestaque = (isset($conf['logo']) and $conf['logo'] != '' ) ? true : false; 
                if ($temDestaque){ ?>
                  <div class="col-md-12">
                    <div class="img-item">
                      <img style="padding: 5%;width: 40%;text-align: center;background: #343a40;margin-bottom: 10px;"  class="scale-with-grid imagem-destaque" src="<?=$conf['logo']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="file" name="logo">
                  </div>
                <?php } else{ ?>
                  <div class="col-md-12">
                    <input type="file" name="logo">
                  </div>
                <?php }?>
              </div>
              <div class="col-md-6">
                <label for="inputName">Logo escuro</label>
                <?php  $temDestaque = (isset($conf['logo_dark']) and $conf['logo_dark'] != '' ) ? true : false; 
                if ($temDestaque){ ?>
                  <div class="col-md-12">
                    <div class="img-item">
                      <img style="margin:5%; width: 40%; text-align: center;"  class="scale-with-grid imagem-destaque" src="<?=$conf['logo_dark']?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="file" name="logo_dark">
                  </div>
                <?php } else{ ?>
                  <div class="col-md-12">
                    <input type="file" name="logo_dark">
                  </div>
                <?php }?>
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
                  <input type="submit" value="Alterar Configurações" class="btn btn-success">
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </form>
</section>
