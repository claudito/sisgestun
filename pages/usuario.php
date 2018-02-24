<?php 
include'../autoload.php';
Session::validity();
Assets::title('Usuario');
Assets::sweetalert();
Assets::datatables();
Assets::head();
Assets::nav('../');
Assets::breadcrumbs('MANTENIMIENTOS','USUARIOS');
//Assets::modal('usuario/agregar');
//Assets::modal('menu/eliminar');
?>
<div class="row">
<div class="col-md-12">

<div class="pull-right">
<button class="btn btn-primary" data-toggle="modal" href="#modal-agregar"><i class="fa fa-plus"></i>  Agregar</button>
</div>

<div id="mensaje"></div>
<div id="loader"></div>
<div id="table"></div>

</div>
</div>

<script src="../ajax/app/usuario.js"></script>
<script>loadTable()</script>
<?php  Assets::footer();  ?>