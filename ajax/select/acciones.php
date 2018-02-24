<?php 

include'../../autoload.php';
Session::validity();

$codigo  =  $_POST['elegido'];

$equipo =  substr($codigo, 0,9);

$codigo = substr($codigo,9);

?>
<input type="hidden" name="equipo" value="<?php echo $equipo; ?>">


<div class="form-group">
<label>Acciones</label>
<select name="acciones" required="" class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach (Accion::lista($codigo) as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['nombre'] ?></option>
<?php endforeach ?>
</select>
</div>