<?php 

include'../../../autoload.php';
Session::validity();
 ?>

 <?php if ( count(Aforo::lista()) > 0): ?>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">AFORO</h3>
	</div>
	<div class="panel-body">

	<div class="table-responsive">
	<table  id="consulta" class="table table-bordered table-condensed">
		<thead>
			<tr class="info">
				<th class="text-center">FECHA</th>
				<th class="text-center">TURNO</th>
				<th class="text-center">SENTIDO</th>
				<th class="text-center">TOTAL LIVIANO</th>
				<th class="text-center">TOTAL PESADO</th>
				<th class="text-center">VELOCIDAD</th>
				<th style="text-align: center;">ACCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach (Aforo::lista() as $key => $value): ?>
		<tr class="text-center">
    <td>
    <a href="<?php echo URL ?>docs/pdf/aforo?fecha=<?php echo $value['fecha'] ?>" target="_blank"><?php echo date_format(date_create($value['fecha']),'d/m/Y'); ?></a>
    </td>
		<td class="text-center">
		<?php  
        switch ($value['codigo_turno']) {
        	case 'CODTUR001':
            echo "MAÑANA";
        		break;
        	case 'CODTUR002':
            echo "TARDE";
        		break;
        	case 'CODTUR003':
            echo "NOCHE";
        		break;
        	default:
        	echo "no existe";
        		break;
        }

		?> 
	   </td>
	   <td class="text-center">
		<?php  
        switch ($value['codigo_sentido']) {
        	case 'CODSEN001':
            echo "CALLAO";
        		break;
        	case 'CODSEN002':
            echo "VENTANILLA";
        		break;
        	default:
        	echo "no existe";
        		break;
        }

		?> 
	   </td>
		<td class="text-center"><?php echo round($value['total_liviano'],2); ?> </td>
		<td class="text-center"><?php echo round($value['total_pesado'],2); ?> </td>
		<td class="text-center"><?php echo round($value['velocidad'],2); ?> </td>
		<td class="text-center">
		 <a data-id="<?php echo $value['id'];?>" id=""  class="btn btn-edit btn-sm btn-info"><i class="glyphicon glyphicon-edit"></i></a>
		<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-eliminar" data-id="<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-trash"></i></button>
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
  		$.get("../templates/modal/aforo/actualizar.php","id="+id,function(data){
  			$("#form-edit").html(data);
  		});
  		$('#modal-actualizar').modal('show');
  	});
  </script>
  <div class="modal fade" id="modal-actualizar" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Actualizar</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal  Actualizar-->
	<script>
	$(document).ready(function(){
	$('#consulta').DataTable();
	});
	</script>

 <?php else: ?>
 <p class="alert alert-warning">No existen Registros.</p>
 <?php endif ?>

