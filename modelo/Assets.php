<?php 

class Assets{

function title($titulo)
{

echo '<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>'.$titulo.' | Tunel GMB </title>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="http://www.iconarchive.com/download/i43033/oxygen-icons.org/oxygen/Categories-applications-internet.ico">

<!-- Convertir a Mayúsculas -->
<script>
function Mayusculas(field) 
{
field.value         = field.value.toUpperCase();
}
</script>
<style>
table{font-size: 13px;}
.btn-responsive {
    white-space: normal !important;
    word-wrap: break-word;
}
</style>


	';
}


function head()
{

echo '
</head>
<body>
<div class="container-fluid">
';

}


function nav($ruta)
{
  echo '<div class="row">
        <div class="col-md-12">';
  include''.$ruta.'/templates/nav.php';
  echo '</div>
        </div>';
}


function breadcrumbs($menu='',$submenu='')
{

echo '<div class="row">
<div class="col-md-12">
<ol class="breadcrumb">
<li><a href="'.URL.'"><i class="fa fa-home"></i> INICIO</a></li>
<li>'.$menu.'</li>
<li>'.$submenu.'</li>
</ol>
</div>
</div>';

}


function modal($ruta='')
{
include'../templates/modal/'.$ruta.'.php';
}


function modal_actualizar($ruta)
{
echo '            
<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    var parametros = $(this).serialize();
     $.ajax({
          type: "POST",
          url: "../controlador/'.trim($ruta).'/actualizar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
          $("#modal-actualizar").modal("hide"); //ocultar modal
          //$("body").removeClass("modal-open");
          //$("body").removeAttr("style");
          $(".modal-backdrop").remove();
          loadTable();
          }
      });
  });
</script>
 ';
}



function footer()
{
echo '
<footer>
<p class="text-center">Área de TI - Tunel Gambetta - '.date('Y').'</p>
</footer>
</div>
<script src="'.URL.'ajax/logout.js"></script>
</body>
</html>
	';
}


function datatables()
{
echo '<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script type="text/javascript" src="'.URL.'assets/js/datatable-es.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>';
}


function datatables_export()
{
echo '<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
';
}



function sweetalert()
{
echo '  
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
';
}
function selectize()
{
echo '<link rel="stylesheet" href="http://selectize.github.io/selectize.js/css/selectize.default.css" >
<script src="http://selectize.github.io/selectize.js/js/selectize.js"></script>';
}
function jqueryiu()
{
	echo '<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">';
}








}




 ?>