<script>
$(document).ready(function(){
        $(".opcion").click(function(evento){
          
            var valor = $(this).val();
          
            if(valor == 'opcion2'){
                $("#div2").css("display", "block");
                $("#div1").css("display", "none");
                $("#opcion1").prop('checked', false); 
                $("#tipo").val('tipo2');
            }else{
                $("#div2").css("display", "none");
                $("#div1").css("display", "block");
                $("#opcion2").prop('checked', false); 
                $("#tipo").val('tipo1');
            }
    });
});
</script>

<script >
$(document).ready(function() {
// Parametros para el combo
$("#idsistema2").change(function () {
$("#idsistema2 option:selected").each(function () {
elegido=$(this).val();
$.post("../ajax/select2/tipo_equipos", { elegido: elegido }, function(data){
$("#datatipo_equipos2").html(data);
});     
});
});    
});
</script>

<script >
$(document).ready(function() {
// Parametros para el combo
$("#idsistema").change(function () {
$("#idsistema option:selected").each(function () {
elegido=$(this).val();
$.post("../ajax/select/tipo_equipos", { elegido: elegido }, function(data){
$("#datatipo_equipos").html(data);
});     
});
});    
});
</script>


<form  id="agregar" novalidate>

<input type="hidden" id="tipo"  name="tipo" value="tipo1">


<div class="modal fade" id="modal-agregar">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Agregar Evento</h4>
</div>
<div class="modal-body">

<input type="hidden" name="id"  id="id" value="<?php echo $_GET['id']; ?>">

<div class="row">
<div class="col-md-6">

<label >Metódo de Registro:</label><br>

<label class="radio-inline">
<input type="radio"  class="opcion" id="opcion1"  value="opcion1" checked > Opción N°1
</label>
<label class="radio-inline">
<input type="radio"  class="opcion" id="opcion2"  value="opcion2"  > Opción N°2
</label>

<br><br>
<div id="div1">
<!-- Select 1-->

<div class="form-group">
<label>Sistema</label>
<select name="sistema"  id="idsistema"  class="form-control" required>
<option value="">[Seleccionar]</option>
<?php foreach (Sistema::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
<?php endforeach ?>
</select>
</div>

<div id="datatipo_equipos"></div>
</div>
        
<div id="div2" style="display:none;">
<!-- select 2 -->
<div class="form-group">
<label>Sistema</label>
<select name="sistema2"  id="idsistema2"  class="form-control" required>
<option value="">[Seleccionar]</option>
<?php foreach (Sistema::lista() as $key => $value): ?>
<option value="<?php echo $value['codigo']; ?>"><?php echo $value['nombre']; ?></option>
<?php endforeach ?>
</select>
</div>


<div id="datatipo_equipos2"></div>

</div>









</div>
<div class="col-md-6">
<div class="form-group">
<label >Hora Inicio</label>
<input type="time" name="horainicio"  required="" class="form-control"  value="<?php echo date('H:i'); ?>">
</div>

<div class="form-group">
<label >Fecha Inicio</label>
<input type="date" name="fechainicio"  required="" class="form-control"  value="<?php echo date('Y-m-d'); ?>">
</div>

<div class="form-group">
<label >Hora Fin</label>
<input type="time" name="horafin"  required="" class="form-control"  value="<?php echo date('H:i'); ?>">
</div>

<div class="form-group">
<label >Fecha Fin</label>
<input type="date" name="fechafin"  required="" class="form-control"  value="<?php echo date('Y-m-d'); ?>">
</div>
</div>
</div>




</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Agregar</button>
</div>
</div>
</div>
</div>

</form>