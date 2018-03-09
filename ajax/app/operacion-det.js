
var carpeta =  "operacion-det";

function loadTable(id){
    var parametros = {"id":id};
    $("#loader").fadeIn('slow');
    $.ajax({
      url:'../templates/modal/'+carpeta+'/listar.php',
      data: parametros,
       beforeSend: function(objeto){
      $("#loader").html("<img src='../assets/img/loader.gif'>");
      },
      success:function(data){
        $("#table").html(data).fadeIn('slow');
        $("#loader").html("");
      }
    })
  }


$( "#agregar" ).submit(function( event ) {
var parametros = $(this).serialize();
var id         =  $("#id").val();
$.ajax({
  type: "POST",
  url: "../controlador/"+carpeta+"/agregar.php",
  data: parametros,
   beforeSend: function(objeto){
    $("#mensaje").html("Mensaje: Cargando...");
    },
  success: function(datos){
  $("#mensaje").html(datos);//mostrar mensaje 
  $('#modal-agregar').modal('hide');  // ocultar modal
  loadTable(id);
  }
});
event.preventDefault();
});




$('#modal-eliminar-archivo').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var modal = $(this)
      modal.find('#id').val(id)
    })

$('#modal-eliminar-evento').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var modal = $(this)
      modal.find('#id').val(id)
    })

$( "#archivo" ).submit(function( event ) {
    var parametros = $(this).serialize();
    var  id        = $("#id").val();
       $.ajax({
          type: "POST",
          url: "../controlador/"+carpeta+"/archivo.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
          $('#modal-archivo').modal('hide');
          loadTable(id);
          }
      });
      event.preventDefault();
    });



$( "#eliminar-archivo" ).submit(function( event ) {
    var parametros = $(this).serialize();
    var  id        = $("#id").val();
       $.ajax({
          type: "POST",
          url: "../controlador/"+carpeta+"/eliminar-archivo.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
          $('#modal-eliminar-archivo').modal('hide');
          loadTable(id);
          }
      });
      event.preventDefault();
    });

$( "#eliminar-evento" ).submit(function( event ) {
    var parametros = $(this).serialize();
    var  id        = $("#id").val();
       $.ajax({
          type: "POST",
          url: "../controlador/"+carpeta+"/eliminar-evento.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
          $('#modal-eliminar-evento').modal('hide');
          loadTable(id);
          }
      });
      event.preventDefault();
    });



// captura del campo textarea Query
$(document).on('blur', '#observaciones', function(){  
var    id  = $(this).data("id");  
var   texto = $(this).val();  
edit_data(id, texto, "observaciones");

});  


function edit_data(id, texto, campo)  
{  
$.ajax({  
url: "../controlador/operacion/actualizar-campo.php",
method:"POST",  
data:{id:id, texto:texto, campo:campo},  
dataType:"text",  
success:function(data){  

$("#mensaje-update-campo").html(data);


}  
});  
}  
