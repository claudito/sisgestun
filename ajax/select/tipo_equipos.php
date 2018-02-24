<?php 

include'../../autoload.php';
Session::validity();

$codigo  =  $_POST['elegido'];
?>

<script >
$(document).ready(function() {
// Parametros para el combo
$("#idtipo_equipos").change(function () {
$("#idtipo_equipos option:selected").each(function () {
elegido=$(this).val();
$.post("../ajax/select/equipos.php", { elegido: elegido }, function(data){
$("#dataequipos").html(data);
});     
});
});    
});
</script>




<div class="form-group">
<label>Tipo de Equipo</label>
<select name="tipo_equipo" id="idtipo_equipos" required="" class="form-control">
<option value="">[Seleccionar]</option>
<?php foreach (Tipo_equipo::lista($codigo) as $key => $value): ?>
<option value="<?php echo $value['codigo'] ?>"><?php echo $value['nombre'] ?></option>
<?php endforeach ?>
</select>
</div>


<div id="dataequipos"></div>

