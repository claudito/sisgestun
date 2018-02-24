<?php 

include'../../autoload.php';
Session::validity();

$descripcion =  Funciones::validar_xss($_POST['descripcion']);
$item        =  Funciones::validar_xss($_POST['item']);

$objeto      =  new Menu($descripcion,$item);
$data        =  $objeto->agregar();

if($data=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Agregado",2);
}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}



?>