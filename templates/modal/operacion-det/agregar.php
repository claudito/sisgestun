<script >
$(document).ready(function() {
// Parametros para el combo
$("#idsistema").change(function () {
$("#idsistema option:selected").each(function () {
elegido=$(this).val();
$.post("../ajax/select/tipo_equipos", { elegido: elegido }, function(data){
$("#datatipo_equipos").html(data);
});     
});
});    
});
</script>

<form  id="agregar">

<div class="modal fade" id="modal-agregar">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Agregar Evento</h4>
</div>
<div class="modal-body">

<input type="hidden" name="id"  id="id" value="<?php echo $_GET['id']; ?>">

<div class="row">
<div class="col-md-6">

<div class="form-group">
<label>Sistema</label>
<select name="sistema"  id="idsistema"  class="form-control" required>
<option value="">[Seleccionar]</option>
<?php foreach (Sistema::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
<?php endforeach ?>
</select>
</div>


<div id="datatipo_equipos"></div>
	



</div>
<div class="col-md-6">
<div class="form-group">
<label >Hora Inicio</label>
<input type="time" name="horainicio"  required="" class="form-control"  value="<?php echo date('H:i'); ?>">
</div>

<div class="form-group">
<label >Fecha Inicio</label>
<input type="date" name="fechainicio"  required="" class="form-control"  value="<?php echo date('Y-m-d'); ?>">
</div>

<div class="form-group">
<label >Hora Fin</label>
<input type="time" name="horafin"  required="" class="form-control"  value="<?php echo date('H:i'); ?>">
</div>

<div class="form-group">
<label >Fecha Fin</label>
<input type="date" name="fechafin"  required="" class="form-control"  value="<?php echo date('Y-m-d'); ?>">
</div>
</div>
</div>




</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Agregar</button>
</div>
</div>
</div>
</div>

</form>