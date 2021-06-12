<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Adicionar Projeto</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Adicionar Projeto</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form id="form" role="form" action="<?= $actual_link ?>/painel/adicionar-projeto/action" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-7">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" id="titulo" class="form-control" name="titulo">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição do projeto</label>
                            <textarea rows="5" id='editor' name="descricao"></textarea>
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
                            <input type="text" id="local" class="form-control" name="local">
                        </div>
                        <div class="form-group">
                            <label for="duracao">Duração</label>
                            <input type="text" id="duracao" class="form-control" name="duracao">
                        </div>
                        <div class="form-group">
                            <label for="cliente">Cliente</label>
                            <input type="text" id="cliente" class="form-control" name="cliente">
                        </div>
                        <div class="form-group">
                           <label for="categorias">Categoria do projeto</label>
                           <input type="text"  id="categorias" class="form-control" name="categorias">
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-5">
            <div class="card card-primary card-outline">
                <div class="card-header with-border">
                    <h3 class="card-title">Imagem</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="box box-warning" style="margin-bottom:25px;">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="file" name="fotoprincipal">
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
                            <a href="<?= $actual_link ?>/painel/" class="btn btn-secondary">Cancelar</a>
                            <input type="submit" value="Adicionar Projeto" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>