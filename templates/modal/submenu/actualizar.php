<?php 

include'../../../autoload.php';
Session::validity();
$id       =  $_GET['id'];   

 ?>

<form role="form" id="actualizar" autocomplete="off">

<input type="hidden" name="id" value="<?php echo $id; ?>">

<div class="form-group">
<label>DESCRIPCIÓN</label>
<input type="text" name="descripcion" id=""  required="" class="form-control" maxlength="100" 
 onchange="Mayusculas(this)" value="<?php echo Submenu::consulta($id,'descripcion'); ?>">
</div>

<div class="form-group">
<label>RUTA</label>
<input type="text" name="ruta" id=""  required="" class="form-control" maxlength="100" 
 value="<?php echo Submenu::consulta($id,'ruta'); ?>">
</div>

<div class="form-group">
<label>ITEM</label>
<input type="number" min="1" name="item" id=""  required="" class="form-control" value="<?php echo Submenu::consulta($id,'item') ?>">
</div>

<div class="form-group">
<label>MENÚ</label>
<select name="menu" id="" class="form-control" required="">
<option value="<?php echo Submenu::consulta($id,'idmenu') ?>"><?php echo Submenu::consulta($id,'menu') ?></option>
<?php foreach (Menu::lista() as $key => $value): ?>
<?php if ($value['id']!==Submenu::consulta($id,'idmenu')): ?>
<option value="<?php echo $value['id']; ?>"><?php echo $value['descripcion']; ?></option>
<?php else: ?>
<?php endif ?>
<?php endforeach ?>
</select>
</div>

<button class="btn btn-primary">Actualizar</button>

</form>

<?php  Assets::modal_actualizar('submenu'); ?>
