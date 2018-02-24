<?php 

include'../../../autoload.php';
Session::validity();

$id =   $_GET['id'];

 ?>

 
<?php if (count(Operacion_archivo::lista($id))>0): ?>
 <div class="panel panel-success"  style="max-width: 60%">
 	<div class="panel-heading">
 		<h3 class="panel-title">Archivos</h3>
 	</div>
 	<div class="panel-body">
 	 <div class="table-responsive">
 	 	<table class="table table-condensed" >
 	 		<thead>
 	 			<tr>
 	 				<th>Nombre</th>
 	 				<th>Tipo</th>
 	 				<th>Tamaño</th>
 	 				<th>Acciones</th>
 	 			</tr>
 	 		</thead>
 	 		<tbody>
 	 		<?php foreach (Operacion_archivo::lista($id) as $key => $value): ?>
			<tr>
			<td><a href="<?php echo "../uploads/".$value['ruta'] ?>" target="_blank"><?php echo $value['nombre'] ?></a></td>
			<td><?php echo $value['tipo'] ?></td>
			<td><?php echo Funciones::format_size($value['size']); ?></td>
			<td>
			<a data-toggle="modal" data-target="#modal-eliminar-archivo" class="btn btn-danger btn-sm" data-id="<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
			</td>
			</tr>
 	 		<?php endforeach ?>
 	 		</tbody>
 	 	</table>
 	 </div>
 	</div>
 </div>	
<?php else: ?>
<p class="alert alert-warning">No hay Archivos Disponibles.</p>
<?php endif ?>


  
 <?php if (count(Operacion_det::lista($id))>0): ?>
<div class="panel panel-primary">
<div class="panel-heading">
	<h3 class="panel-title">Eventos</h3>
</div>
<div class="panel-body">
<div class="table-responsive">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Sistema</th>
				<th>Tipo de Equipo</th>
				<th>Equipo</th>
				<th>Acciones</th>
				<th>Hora de Inicio</th>
				<th>Fecha de Inicio</th>
				<th>Hora de Fin</th>
				<th>Fecha de Fin</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach (Operacion_det::lista($id) as $key => $value): ?>
		<tr>
		<td><?php echo $value['sistema']; ?></td>
		<td><?php echo $value['tipo_equipo']; ?></td>
		<td><?php echo $value['equipo']; ?></td>
		<td><?php echo $value['acciones']; ?></td>
		<td><?php echo date_format(date_create($value['hora_inicio']),'H:i'); ?></td>
		<td><?php echo date_format(date_create($value['fecha_inicio']),'d/m/Y'); ?></td>
		<td><?php echo date_format(date_create($value['hora_fin']),'H:i'); ?></td>
		<td><?php echo date_format(date_create($value['fecha_fin']),'d/m/Y'); ?></td>
		<td>
		<a  class="btn btn-primary btn-sm btn-edit" data-id="<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
		<a  class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#modal-eliminar-evento" data-id="<?php echo $value['id']; ?>"></i></a>
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
  		id = $(this).data("id");
  		$.get("../templates/modal/operacion-det/actualizar-evento.php","id="+id,function(data){
  			$("#form-edit").html(data);
  		});
  		$('#modal-actualizar-evento').modal('show');
  	});
  </script>
  <div class="modal fade" id="modal-actualizar-evento" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
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

 <?php else: ?>
 <p class="alert alert-warning">No hay Eventos Disponibles.</p>
 <?php endif ?>