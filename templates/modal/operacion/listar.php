<?php 

include'../../../autoload.php';
Session::validity();


 ?>

<?php if (count(Operacion::lista())>0): ?>
<div class="panel panel-info">
<div class="panel-heading">
	<h3 class="panel-title">LISTA DE INCIDENCIAS</h3>
</div>
<div class="panel-body">

<div class="table-responsive">
<table class="table table-condensed table-bordered" id="consulta">
<thead>
<tr class="info">
<th class="text-center">Código</th>
<th>Fecha</th>
<th>Sentido</th>
<th>Turno</th>
<th>Incidente</th>
<th>Coordinador</th>
<th>Operador 1</th>
<th>Operador 2</th>
<th>Ti</th>
<th>Epi</th>
<th>Seguridad</th>
<th>Móvil</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php foreach (Operacion::lista() as $key => $value): ?>
<tr>
<td class="text-center"><a class="btn btn-info btn-sm"  href="incidente-det?id=<?php echo $value['codigo'] ?>"><?php echo $value['codigo'];  ?></a></td>
<td><?php echo date_format(date_create($value['fecha']),'d/m/Y')  ?></td>
<td><?php echo $value['sentido'] ?></td>
<td><?php echo $value['turno'] ?></td>
<td><?php echo $value['valor_incidente'].' - '.$value['descripcion_incidente'] ?></td>
<td><?php echo $value['coordinador'] ?></td>
<td><?php echo $value['operador1'] ?></td>
<td><?php echo $value['operador2'] ?></td>
<td><?php echo $value['ti'] ?></td>
<td><?php echo $value['epi'] ?></td>
<td><?php echo $value['seguridad'] ?></td>
<td><?php echo $value['movil'] ?></td>
<td>
<button class="btn btn-primary btn-sm btn-edit" data-codigo="<?php echo $value['codigo'] ?>" ><i class="fa fa-edit"></i></button>
<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-eliminar" data-id="<?php echo $value['codigo']; ?>"><i class="glyphicon glyphicon-trash"></i></button>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>


</div>
</div>

<!-- Modal  Actualizar-->
<script>
$(".btn-edit").click(function(){
codigo = $(this).data("codigo");
$.get("../templates/modal/operacion/actualizar.php","codigo="+codigo,function(data){
$("#form-edit").html(data);
});
$('#modal-actualizar').modal('show');
});
</script>
<div class="modal fade" id="modal-actualizar" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Actualizar</h4>
</div>
<div class="modal-body">
<div id="form-edit"></div>
</div>

</div>
</div>
</div>
<!-- Fin Modal Actualizar-->





<script>
$(document).ready(function(){
    $('#consulta').DataTable();
});
</script>
<?php else: ?>
<p class="alert alert-warning">No hay Registros disponibles</p>
<?php endif ?>