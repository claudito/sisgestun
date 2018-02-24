<?php 

include'../../autoload.php';
Session::validity();

$fecha           =   $_POST['fecha'];
$turno           =   $_POST['turno'];
$sentido         =   $_POST['sentido'];
$total_liviano   =   $_POST['total_liviano'];
$total_pesado    =   $_POST['total_pesado'];
$velocidad       =   $_POST['velocidad'];

$objeto  =  new Aforo($fecha,$turno,$sentido,$total_liviano,$total_pesado,$velocidad);

$data  =  $objeto->agregar();
if($data=='existe')
{
  Message::sweetalert("Registro Duplicado","warning","Los datos ya se encuentan registrados",2);
}
else if($data=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Agregado",2);
}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}

?>