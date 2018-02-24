<?php 

include'../../../autoload.php';
Session::validity();

$usuario        =  $_GET['codigo'];

 ?>

 <form role="form" id="permisos">
  
 <input type="hidden" name="usuario" value="<?php echo $usuario; ?>">

 <?php foreach (Menu::lista() as $key => $value): ?>
 <ul>
 <li><strong><?php echo $value['descripcion'] ?></strong></li>
 <ul>
 <?php foreach (Submenu::lista_nav($value['id']) as $key => $value): ?>
 <?php $permiso  =  new Permiso($value['id'],$usuario);  ?>
 <?php if ($permiso->permiso_nav('estado')==1): ?>
 	<li><input type="checkbox" name="<?php echo $value['id']; ?>" id="" checked> <?php echo $value['descripcion']; ?></li>
 <?php else: ?>
 	<li><input type="checkbox" name="<?php echo $value['id']; ?>" id=""> <?php echo $value['descripcion']; ?></li>
 <?php endif ?>

 <?php endforeach ?>
 </ul>
 </ul>
 <?php endforeach ?>


<div style="padding-left: 30px">
<button class="btn btn-primary"  disabled="">Actualizar Permisos </button>
</div>

</form>
