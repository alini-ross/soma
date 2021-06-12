<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Seja bem vindo(a) <?=$_SESSION["nome"]?></h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
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
						<th>Título</th>
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
							</td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Título</th>
						<th>URL</th>
						<th>Ações</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</section>

