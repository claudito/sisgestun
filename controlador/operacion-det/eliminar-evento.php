<?php 

include'../../autoload.php';
Session::validity();

$id      =  $_POST['id'];
$objeto  =  new Operacion_det();
$data    =  $objeto->eliminar($id);


if($data=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Eliminado",2);

}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}


 ?>