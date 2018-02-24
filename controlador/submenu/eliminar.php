<?php 

include'../../autoload.php';
Session::validity();

$id          =  Funciones::validar_xss($_POST['id']);
$objeto      =  new Submenu();
$data        =  $objeto->eliminar($id);

if($data=='ok')
{
Message::sweetalert("Buen Trabajo","success","Registro Eliminado",2);
}
else
{
Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}

?>