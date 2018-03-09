<?php 

include'../../autoload.php';

$codigo  =  $_POST['elegido'];
 ?>


<div class="form-group">
<label>Plan</label>
<select name="plan2" id="idplan2" required="" class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach (Plan::lista($codigo) as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['nombre'] ?></option>
<?php endforeach ?>
</select>
</div>
