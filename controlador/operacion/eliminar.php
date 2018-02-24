<?php 

include'../../autoload.php';
Session::validity();

$codigo  = $_POST['id'];
$objeto  = new Operacion();
$data    = $objeto->eliminar($codigo);
$data2   = $objeto->eliminar_archivo($codigo);
$data3   = $objeto->eliminar_detalle($codigo);

if($data=='ok' AND $data2=='ok' AND $data3=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Eliminado",2);
}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}




?>