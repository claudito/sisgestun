<?php 

include'../../autoload.php';
Session::validity();

$id          =  Funciones::validar_xss($_POST['id']);
$descripcion =  Funciones::validar_xss($_POST['descripcion']);
$item        =  Funciones::validar_xss($_POST['item']);

$objeto      =  new Menu($descripcion,$item);
$data        =  $objeto->actualizar($id);

if($data=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Actualizado",2);
}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}



?>