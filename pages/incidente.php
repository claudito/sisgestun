<?php 
include'../autoload.php';
Session::validity();
Assets::title('Incidente');
Assets::sweetalert();
Assets::datatables();
Assets::head();
Assets::nav('../');
Assets::breadcrumbs('GESTIÓN','INCIDENTE');
Assets::modal('operacion/agregar');
Assets::modal('operacion/eliminar');
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

<script src="../ajax/app/operacion.js"></script>
<script>loadTable()</script>
<?php  Assets::footer();  ?>