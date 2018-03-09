<form id="agregar" autocomplete="off">
<div class="modal fade" id="modal-agregar">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title"><i class="fa fa-book"></i>   Registrar Incidente</h4>
</div>
<div class="modal-body">

<div class="row">
<div class="col-md-5">

<div class="form-group">
<label>Fecha</label>
<input type="date" name="fecha"  class="form-control" required value="<?php echo date('Y-m-d') ?>">
</div>

<div class="form-group">
<label>Sentido</label>
<select name="sentido"  class="form-control" >
<option value="">[Seleccionar]</option>
<?php foreach (Sentido::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Turno</label>
<select name="turno"  class="form-control" required>
<option value="">[Seleccionar]</option>
<?php foreach (Turno::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
<?php endforeach ?>
</select>
</div>


<div class="form-group">
<label>Incidente</label>
<select name="incidente"  class="form-control" >
<option value="">[Seleccionar]</option>
<?php foreach (Incidente::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['valor'].' - '.$value['descripcion']; ?></option>
<?php endforeach ?>
</select>
</div>







</div>
<div class="col-md-7">
  
<div class="form-group">
<label>Coordinador</label>
<select name="coordinador"  class="form-control" required="">
<option value="">[Seleccionar]</option>
<?php foreach (Personal::lista_cargo('CODCAR002') as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Operador 1</label>
<select name="operador1"  class="form-control"  required="">
<option value="">[Seleccionar]</option>
<?php foreach (Personal::lista_cargo('CODCAR003') as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endforeach ?>
</select>
</div>


<div class="form-group">
<label>Operador 2</label>
<select name="operador2"  class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach (Personal::lista_cargo('CODCAR003') as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>TI</label>
<select name="ti"  class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach (Personal::lista_cargo('CODCAR004') as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>EPI</label>
<select name="epi"  class="form-control" >
<option value="">[Seleccionar]</option>
<?php foreach (Personal::lista_cargo('CODCAR006') as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Seguridad</label>
<select name="seguridad"  class="form-control" >
<option value="">[Seleccionar]</option>
<?php foreach (Personal::lista_cargo('CODCAR007') as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endforeach ?>
</select>
</div>


<div class="form-group">
<label>Móvil</label>
<select name="movil"  class="form-control" >
<option value="">[Seleccionar]</option>
<?php foreach (Vehiculo::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['placa']; ?></option>
<?php endforeach ?>
</select>
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