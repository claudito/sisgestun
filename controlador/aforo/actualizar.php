<?php 

include'../../autoload.php';
Session::validity();

$id              =   $_POST['id'];
$total_liviano   =   $_POST['total_liviano'];
$total_pesado    =   $_POST['total_pesado'];
$velocidad       =   $_POST['velocidad'];

$objeto  =  new Aforo('','','',$total_liviano,$total_pesado,$velocidad);

$data  =  $objeto->actualizar($id);
if($data=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Actualizado",2);
}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}

?>