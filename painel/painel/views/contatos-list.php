<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Contatos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
          <li class="breadcrumb-item active">Contatos</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Contatos</h3>
    </div>
    <div class="card-body">
      <table id="contatos-lista" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Data</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($contatos as $contato){?> 
            <tr>
              <td class="text-center"><?=$contato["created"]?></td>
              <td class="text-center"><?=$contato["nome"]?></td>
              <td class="text-center"><?=$contato["email"]?></td>
              <td class="text-center"><?=$contato["telefone"]?></td>
              <td class="text-center"><?=$contato["assunto"]?></td>
              <td class="text-center"><?=$contato["mensagem"]?></td>
              <td class="text-center project-actions">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-<?=$contato["id"]?>"><i class="fas fa-folder"></i> Ver</button>
                <!-- <a class="btn btn-info btn-sm" href="<?=$actual_link?>/painel/editar-post/<?=$contato["id"]?>"><i class="fas fa-pencil-alt"></i> Editar</a> -->
                <a class="btn btn-danger btn-sm" href="<?=$actual_link?>/painel/apagar-contato/<?=$contato["id"]?>"><i class="fas fa-trash"></i> Apagar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Data</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Ações</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</section>

<?php foreach ($contatos as $contato){?> 

  <div class="modal fade" id="modal-<?=$contato['id']?>">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ver cliente</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <p><b>Nome -</b> <?=$contato['nome']?></p>
         <p><b>E-mail -</b> <?=$contato['email']?></p>
         <p><b>Telefone -</b> <?=$contato['telefone']?></p>
         <p><b>Assunto -</b> <?=$contato['assunto']?></p>
         <p><b>Mensagem -</b> <?=$contato['mensagem']?></p>
         <p><b>Data -</b> <?=$contato['created']?></p>
       </div>
       <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<?php } ?> 
