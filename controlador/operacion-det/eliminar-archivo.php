<?php 

include'../../autoload.php';
Session::validity();

$id       =  $_POST['id'];
$ruta     =  $_SERVER['DOCUMENT_ROOT'].FOLDER."uploads/";
$archivo  =  Operacion_archivo::consulta($id,'ruta');
$filename = $ruta.$archivo;
$filename = str_replace('/', '\\', $filename);
$objeto   =  new Operacion_archivo();
$data     =  $objeto->eliminar($id);

if($data=='ok')
{
Message::sweetalert("Buen Trabajo","success","Registro Eliminado",2);
unlink($filename);
/*
if (unlink($filename)) 
{
echo "file eliminado";
} 
else 
{
echo "error filename";
}
*/


}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}

 ?>