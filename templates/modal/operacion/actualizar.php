<?php 

include'../../../autoload.php';
Session::validity();

$codigo  = $_GET['codigo'];


 ?>

 <form id="actualizar">
 	
<div class="row">
<div class="col-md-5">

<div class="form-group">
<label>Código</label>
<input type="text"  name="codigo"  value="<?php echo $codigo; ?>" class="form-control" readonly>
</div>


<div class="form-group">
<label>Fecha</label>
<input type="date" name="fecha"  class="form-control" required value="<?php echo Operacion::consulta($codigo,'fecha'); ?>">
</div>

<div class="form-group">
<label>Sentido</label>
<select name="sentido"  class="form-control" >
<option value="<?php echo Operacion::consulta($codigo,'sentido_codigo'); ?>"><?php echo Operacion::consulta($codigo,'sentido'); ?></option>
<?php $sentido = Operacion::consulta($codigo,'sentido_codigo'); ?>
<?php foreach (Sentido::lista() as $key => $value): ?>
<?php if ($sentido!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Turno</label>
<select name="turno"  class="form-control" required>
<option value="<?php echo Operacion::consulta($codigo,'turno_codigo'); ?>"><?php echo Operacion::consulta($codigo,'turno'); ?></option>
<?php $turno = Operacion::consulta($codigo,'turno_codigo'); ?>
<?php foreach (Turno::lista() as $key => $value): ?>
<?php if ($turno!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>


<div class="form-group">
<label>Incidente</label>
<select name="incidente"  class="form-control" >
<option value="<?php echo Operacion::consulta($codigo,'incidente_codigo'); ?>"><?php echo Operacion::consulta($codigo,'valor_incidente').' '.Operacion::consulta($codigo,'descripcion_incidente'); ?></option>
<?php $incidente = Operacion::consulta($codigo,'incidente_codigo'); ?>
<?php foreach (Incidente::lista() as $key => $value): ?>
<?php if ($incidente!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['valor'].' - '.$value['descripcion']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>







</div>
<div class="col-md-7">
  
<div class="form-group">
<label>Coordinador</label>
<select name="coordinador"  class="form-control" required="">
<option value="<?php echo Operacion::consulta($codigo,'codigo_coordinador') ?>"><?php echo Operacion::consulta($codigo,'coordinador') ?></option>
<?php $coordinador = Operacion::consulta($codigo,'codigo_coordinador') ?>
<?php foreach (Personal::lista_cargo('CODCAR002') as $key => $value): ?>
<?php if ($coordinador!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Operador 1</label>
<select name="operador1"  class="form-control"  required="">
<option value="<?php echo Operacion::consulta($codigo,'codigo_operador1'); ?>"><?php echo Operacion::consulta($codigo,'operador1'); ?></option>
<?php $operador1 = Operacion::consulta($codigo,'codigo_operador1'); ?>
<?php foreach (Personal::lista_cargo('CODCAR003') as $key => $value): ?>
<?php if ($operador1!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>


<div class="form-group">
<label>Operador 2</label>
<select name="operador2"  class="form-control">
<option value="<?php echo Operacion::consulta($codigo,'codigo_operador2'); ?>"><?php echo Operacion::consulta($codigo,'operador2'); ?></option>
<?php $operador2 = Operacion::consulta($codigo,'codigo_operador2'); ?>
<?php foreach (Personal::lista_cargo('CODCAR003') as $key => $value): ?>
<?php if ($operador2!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>TI</label>
<select name="ti"  class="form-control" >
<option value="<?php echo Operacion::consulta($codigo,'codigo_ti'); ?>"><?php echo Operacion::consulta($codigo,'ti');  ?></option>
<?php $ti = Operacion::consulta($codigo,'codigo_ti'); ?>
<?php foreach (Personal::lista_cargo('CODCAR004') as $key => $value): ?>
<?php if ($ti!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>EPI</label>
<select name="epi"  class="form-control" >
<option value="<?php echo Operacion::consulta($codigo,'codigo_epi'); ?>"><?php echo Operacion::consulta($codigo,'epi'); ?></option>
<?php $epi = Operacion::consulta($codigo,'codigo_epi'); ?>
<?php foreach (Personal::lista_cargo('CODCAR006') as $key => $value): ?>
<?php if ($epi!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

<div class="form-group">
<label>Seguridad</label>
<select name="seguridad"  class="form-control" >
<option value="<?php echo Operacion::consulta($codigo,'codigo_seguridad'); ?>"><?php echo Operacion::consulta($codigo,'seguridad'); ?></option>
<?php $seguridad = Operacion::consulta($codigo,'codigo_seguridad');  ?>
<?php foreach (Personal::lista_cargo('CODCAR007') as $key => $value): ?>
<?php if ($seguridad!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombres'].' '.$value['apepat'].' '.$value['apemat']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>


<div class="form-group">
<label>Móvil</label>
<select name="movil"  class="form-control" >
<option value="<?php echo Operacion::consulta($codigo,'codigo_movil'); ?>"><?php echo Operacion::consulta($codigo,'movil'); ?></option>
<?php $movil = Operacion::consulta($codigo,'codigo_movil'); ?>
<?php foreach (Vehiculo::lista() as $key => $value): ?>
<?php if ($movil!==$value['codigo']): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['placa']; ?></option>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

</div>
</div>

 <button class="btn btn-primary">Actualizar</button>
 </form>

 <?php Assets::modal_actualizar('operacion'); ?>