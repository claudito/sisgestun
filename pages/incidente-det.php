<?php 
include'../autoload.php';
Session::validity();
Assets::title('Detalle Incidente');
Assets::sweetalert();
Assets::datatables();
Assets::head();
Assets::nav('../');
Assets::breadcrumbs('GESTIÓN','DETALLE INCIDENTE N° '.$_GET['id'].'');
Assets::modal('operacion-det/agregar');
Assets::modal('operacion-det/archivo');
Assets::modal('operacion-det/eliminar-archivo');
Assets::modal('operacion-det/eliminar-evento');
#id
$id  =  $_GET['id'];

$_SESSION['id_operacion'] = $id;

?>
<style>
table{
font-size: 12px;
}
</style>
<div class="row">


<div class="col-md-3">
<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title">Incidente N° <?php echo $id; ?></h3>
</div>
<div class="panel-body">
<ul>
<li>Fecha:  <?php echo Operacion::consulta($id,'fecha'); ?></li>
<li>Sentido: <?php echo Operacion::consulta($id,'sentido'); ?></li>
<li>Turno:   <?php echo Operacion::consulta($id,'turno'); ?></li>
<li>Tipo de Incidente: <?php echo Operacion::consulta($id,'valor_incidente').' - '.Operacion::consulta($id,'descripcion_incidente'); ?></li>
<li>Coordinador: <?php echo Operacion::consulta($id,'coordinador'); ?></li>
<li>Operador 1: <?php echo Operacion::consulta($id,'operador1'); ?></li>
<li>Operador 2: <?php echo Operacion::consulta($id,'operador2'); ?></li>
<li>TI:  <?php echo Operacion::consulta($id,'ti'); ?></li>
<li>EPI: <?php echo Operacion::consulta($id,'epi'); ?></li>
<li>Seguridad: <?php echo Operacion::consulta($id,'seguridad'); ?></li>
<li>Móvil: <?php echo Operacion::consulta($id,'movil'); ?></li>
</ul>
</div>
</div>
</div>

<div class="col-md-9">

<div class="form-group">
<button class="btn btn-success" data-toggle="modal" href="#modal-archivo"><i class="fa fa-paperclip"></i>  Adjuntar Archivos</button>

<button class="btn btn-primary" data-toggle="modal" href="#modal-agregar"><i class="fa fa-plus"></i>  Agregar Evento</button>

<a href="../docs/pdf/incidente?codigo=<?php echo $id; ?>" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Imprimir</a>

</div>

<div id="mensaje"></div>
<div id="loader"></div>
<div id="table"></div>


<div id="mensaje-update-campo"></div>
<div class="form-group">
<label>Observaciones</label>
<textarea  id="observaciones"  rows="7" class="form-control" onchange="Mayusculas(this)" data-id="<?php echo $id; ?>"><?php echo Operacion::consulta($id,'observaciones') ?></textarea>
</div>



</div>



</div>



<script src="../ajax/app/operacion-det.js"></script>
<script>loadTable(<?php echo $id; ?>)</script>
<?php  Assets::footer();  ?>