<?php 

include'../../../autoload.php';
Session::validity();

$id =  $_GET['id'];

 ?>
<form id="actualizar-evento">

<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

 	
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Sistema</label>
<input type="text"  class="form-control" 
 value="<?php  echo Operacion_det::consulta($id,'sistema');?>" readonly>
</div>
<div class="form-group">
<label>Tipo de Equipo</label>
<input type="text"  class="form-control" 
 value="<?php  echo Operacion_det::consulta($id,'tipo_equipo');?>" readonly>
</div>
<div class="form-group">
<label>Equipo</label>
<input type="text"  class="form-control" 
 value="<?php  echo Operacion_det::consulta($id,'equipo');?>" readonly>
</div>
<div class="form-group">
<label>Acciones</label>
<input type="text"  class="form-control" 
 value="<?php  echo Operacion_det::consulta($id,'acciones');?>" readonly>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label >Hora Inicio</label>
<input type="time" name="horainicio"  required="" class="form-control"  value="<?php echo Operacion_det::consulta($id,'hora_inicio'); ?>">
</div>

<div class="form-group">
<label >Fecha Inicio</label>
<input type="date" name="fechainicio"  required="" class="form-control"  value="<?php echo Operacion_det::consulta($id,'fecha_inicio'); ?>">
</div>

<div class="form-group">
<label >Hora Fin</label>
<input type="time" name="horafin"  required="" class="form-control"  value="<?php echo Operacion_det::consulta($id,'hora_fin'); ?>">
</div>

<div class="form-group">
<label >Fecha Fin</label>
<input type="date" name="fechafin"  required="" class="form-control"  value="<?php echo Operacion_det::consulta($id,'fecha_fin'); ?>">
</div>
</div>
</div>

<button class="btn btn-primary">Actualizar</button>

 </form>
 <script>
    $("#actualizar-evento").submit(function(e){
    e.preventDefault();
    var parametros = $(this).serialize();
    var id         = $("#id").val();
     $.ajax({
          type: "POST",
          url: "../controlador/operacion-det/actualizar-evento.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
         //$("#actualizar")[0].reset();  //resetear inputs
          $('#modal-actualizar-evento').modal('hide'); //ocultar modal
          $('body').removeClass('modal-open');
          $("body").removeAttr("style");
          $('.modal-backdrop').remove();
          loadTable(id);
          }
      });
  });
</script>