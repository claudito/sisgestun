<form  id="agregar" autocomplete="off">

<div class="modal fade" id="modal-agregar"">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Agregar Registro</h4>
</div>
<div class="modal-body">

<div class="form-group">
<label>Fecha:</label>
<input type="date" name="fecha"  class="form-control" required value="<?php echo date('Y-m-d'); ?>">
</div>

<div class="form-group">
<label>Turno:</label>
<select name="turno" class="form-control" required="">
<option value="">[Seleccionar]</option>
<?php foreach (Turno::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['nombre'] ?></option>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Sentido:</label>
<select name="sentido" class="form-control" required="">
<option value="">[Seleccionar]</option>
<?php foreach (Sentido::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['nombre'] ?></option>
<?php endforeach ?>
</select>
</div>


<div class="form-group">
<label>Total Liviano:</label>
<input type="number"  step="any" name="total_liviano"  class="form-control" required>
</div>

<div class="form-group">
<label>Total Pesado:</label>
<input type="number"  step="any" name="total_pesado"  class="form-control" required>
</div>


<div class="form-group">
<label>Velocidad:</label>
<input type="number"  step="any" name="velocidad"  class="form-control" required>
</div>





</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="submir" class="btn btn-primary">Agregar</button>
</div>
</div>
</div>
</div>

</form>