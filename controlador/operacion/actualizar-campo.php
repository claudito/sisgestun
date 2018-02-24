<?php 

include'../../autoload.php';
Session::validity();

$id     = $_POST['id'];
$campo  = $_POST['campo'];
$texto  = $_POST['texto'];

$objeto  =  new Operacion();
$data    = $objeto->actualizar_campo($id,$campo,$texto);
?>
<?php if ($data=='ok'): ?>
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
Registro Actualizado.
</div>	
<?php else: ?>
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
Error de Actualización.
</div>	
<?php endif ?>