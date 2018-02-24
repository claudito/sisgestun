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
 onchange="Mayusculas(this)" value="<?php echo Menu::consulta($id,'descripcion'); ?>" autocomplete="off">
</div>

<div class="form-group">
<label>ITEM</label>
<input type="number" min="1" name="item" id=""  required="" class="form-control" value="<?php echo Menu::consulta($id,'item') ?>">
</div>


<button class="btn btn-primary">Actualizar</button>

</form>

<?php  Assets::modal_actualizar('menu'); ?>
