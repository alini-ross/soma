
</div>
<!-- /.content-wrapper -->
<!-- 
<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.1.0-pre
	</div>
	<strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer> -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?=$actual_link?>/painel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$actual_link?>/painel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- pace-progress -->
<script src="<?=$actual_link?>/painel/plugins/pace-progress/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$actual_link?>/painel/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$actual_link?>/painel/dist/js/demo.js"></script>
<script src="<?=$actual_link?>/painel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<?php if(isset($url[2])){
	if($url[2]=='listar-contatos' or $url[2]=='listar-projetos'){?>
		<script src="<?=$actual_link?>/painel/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/jszip/jszip.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="<?=$actual_link?>/painel/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
		<script>
			$(function () {
				$("#contatos-lista").DataTable({
					"responsive": true, 
					"lengthChange": false, 
					"autoWidth": false,
					"buttons": ["csv", "excel", "pdf", "colvis"],
					"order": [ 1, "desc" ],
					"columnDefs": [
					{ "visible": false, "targets": 3 },
					{ "visible": false, "targets": 4 },
					{ "visible": false, "targets": 5 }
					],
					"exportOptions": {
						columns: 'th:not(:last-child)'
					}
				}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			});
			$(function () {
				$("#imoveis-lista").DataTable({
					"responsive": true, 
					"lengthChange": false, 
					"autoWidth": false,
					// "buttons": ["csv", "excel", "pdf", "colvis"],
					"order": [ 1, "desc" ],
					"exportOptions": {
						columns: 'th:not(:last-child)'
					}
				}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			});
		</script>
	<? } 
}?> 

<!-- <script type="text/javascript">
$('.textarea').wysihtml5();
</script>
--></body>
</html>
