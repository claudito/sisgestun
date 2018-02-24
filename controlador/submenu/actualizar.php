<?php 

include'../../autoload.php';
Session::validity();


$id          =  Funciones::validar_xss($_POST['id']);
$descripcion =  Funciones::validar_xss($_POST['descripcion']);
$ruta        =  Funciones::validar_xss($_POST['ruta']);
$item        =  Funciones::validar_xss($_POST['item']);
$menu        =  Funciones::validar_xss($_POST['menu']);

$objeto      =  new Submenu($descripcion,$ruta,$item,$menu);
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