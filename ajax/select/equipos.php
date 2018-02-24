<?php 

include'../../autoload.php';
Session::validity();

$codigo  =  $_POST['elegido'];

?>

<script >
$(document).ready(function() {
// Parametros para el combo
$("#idequipo").change(function () {
$("#idequipo option:selected").each(function () {
elegido=$(this).val();
$.post("../ajax/select/acciones", { elegido: elegido }, function(data){
$("#dataacciones").html(data);
});     
});
});    
});
</script>



<div class="form-group">
<label>Equipo</label>
<select  id="idequipo" required="" class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach (Equipo::lista($codigo) as $key => $value): ?>
<option value="<?php echo $value['codigo'].$value['tipo_equipos_codigo']; ?>"><?php echo $value['nombre'] ?></option>
<?php endforeach ?>
</select>
</div>


<div id="dataacciones"></div>