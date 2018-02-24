<?php 

Assets::title('Bienvenidos');
Assets::sweetalert();
Assets::head();

Message::sweetalert("Bienvenido","success",strtoupper($_SESSION[KEY.USUARIO]),2);
Assets::nav('.');
 ?>

<div class="row">
<div class="col-md-12">

</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="jumbotron">
<div class="container">
<h1><i class="fa fa-cube"></i> SISGESTUN</h1>
<p>
<a class="btn btn-primary btn-lg" data-toggle="modal" href="#modal-informacion"><i class="fa fa-search fa-1x"></i> Conoce más del Sistema.</a>
</p>
</div>
</div>
</div>
</div>
<?php Assets::footer(); ?>


<div class="modal fade" id="modal-informacion">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Información de Sistema</h4>
			</div>
			<div class="modal-body">
			...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>