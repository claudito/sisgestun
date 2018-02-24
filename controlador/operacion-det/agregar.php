<?php 

include'../../autoload.php';
Session::validity();

$operacion   = $_POST['id'];
$sistema     = (empty($_POST['sistema'])) ? '0'  : $_POST['sistema'] ;
$tipo_equipo = (empty($_POST['tipo_equipo'])) ? '0'  : $_POST['tipo_equipo'] ;
$equipo      = (empty($_POST['equipo'])) ? '0'  : $_POST['equipo'] ;
$acciones    = (empty($_POST['acciones'])) ? '0'  : $_POST['acciones'] ;
$horainicio  = $_POST['horainicio'];
$horafin     = $_POST['horafin'];
$fechainicio = $_POST['fechainicio'];
$fechafin    = $_POST['fechafin'];


$objeto = new Operacion_det($operacion,$sistema,$tipo_equipo,$equipo,$acciones,$horainicio,$horafin,$fechainicio,$fechafin);

$data = $objeto->agregar();

if($data=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Agregado",2);
}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}





 ?>