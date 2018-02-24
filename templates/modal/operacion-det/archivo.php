<form enctype="multipart/form-data"   action="<?php echo URL; ?>/controlador/operacion-det/archivo.php" method="POST"
	   >

<div class="modal fade" id="modal-archivo">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Agregar Archivo</h4>
</div>
<div class="modal-body">

<div id="mensaje-carga"></div>

<input type="hidden" name="id" id="id"  value="<?php echo $_GET['id']; ?>">

<input type="file" name="file" id="file" class="form-control"  required>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="submit" id="enviar" class="btn btn-success">Subir</button>
</div>
</div>
</div>
</div>

</form>