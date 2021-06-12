<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Arquivos</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=$actual_link?>/painel/home">Home</a></li>
					<li class="breadcrumb-item active">Arquivos</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Seus arquivos</h3>
		</div>
		<div class="card-body">
			<table id="arquivos-lista" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nome do cliente</th>
						<th>URL</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($arquivos as $arquivo){?> 
						<tr>
							<td class="text-center"><?=$arquivo["nome"]?></td>
							<td class="text-center"><?=$arquivo["url"]?></td>
							<td class="text-center project-actions">
								<button onclick="document.getElementById('link-<?=$arquivo['id']?>').click()" class="btn btn-primary btn-sm" href="#">
									<i class="fas fa-folder"></i> Baixar
								</button>
								<a id="link-<?=$arquivo['id']?>" href="<?=$arquivo['url']?>" download hidden></a>
								<a class="btn btn-danger btn-sm" href="<?=$actual_link?>/painel/apagar-arquivo/<?=$arquivo["id"]?>"><i class="fas fa-trash"></i> Apagar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Nome</th>
						<th>URL</th>
						<th>Ações</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</section>

