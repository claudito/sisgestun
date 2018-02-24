<?php 

include'../../autoload.php';
Session::validity();

$codigo          =   $_POST['codigo'];
$fecha           =   $_POST['fecha'];
$sentido         =   (empty($_POST['sentido'])) ? '0'  : $_POST['sentido'];
$turno           =   $_POST['turno'];
$incidente       =   (empty($_POST['incidente'])) ? ''  : $_POST['incidente'] ;

$coordinador     =   (empty($_POST['coordinador'])) ? '0'  : $_POST['coordinador'] ;
$operador1       =   (empty($_POST['operador1']))   ? '0'  : $_POST['operador1'] ;
$operador2       =   (empty($_POST['operador2']))   ? '0'  : $_POST['operador2'] ;
$ti              =   (empty($_POST['ti']))          ? '0'  : $_POST['ti'] ;
$epi             =   (empty($_POST['epi']))         ? '0'  : $_POST['epi'] ;
$seguridad       =   (empty($_POST['seguridad']))   ? '0'  : $_POST['seguridad'] ;
$movil           =   (empty($_POST['movil']))       ? '0'  : $_POST['movil'] ;


$objeto  =  new Operacion($codigo,$fecha,$sentido,$turno,$incidente,$coordinador,$operador1,$operador2,$ti,$epi,$seguridad,$movil);
$data    = $objeto->actualizar();

if($data=='ok')
{
  Message::sweetalert("Buen Trabajo","success","Registro Actualizado",2);
}
else
{
  Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}



?>