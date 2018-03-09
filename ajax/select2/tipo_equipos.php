<?php 

include'../../autoload.php';
Session::validity();

$codigo  =  $_POST['elegido'];
?>

<script >
$(document).ready(function() {
// Parametros para el combo
$("#idtipo_equipos2").change(function () {
$("#idtipo_equipos2 option:selected").each(function () {
elegido=$(this).val();
$.post("../ajax/select2/plan.php", { elegido: elegido }, function(data){
$("#dataplan2").html(data);
});     
});
});    
});
</script>




<div class="form-group">
<label>Tipo de Equipo</label>
<select name="tipo_equipo2" id="idtipo_equipos2" required="" class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach (Tipo_equipo::lista($codigo) as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['nombre'] ?></option>
<?php endforeach ?>
</select>
</div>


<div id="dataplan2"></div>

