<?php 

include'../../autoload.php';
Session::validity();

$correlativo  = Correlativo::consulta('REGINC')+1;

#Bloque 1
$codigo          =   $correlativo;

$fecha           =   $_POST['fecha'];
$sentido         =   (empty($_POST['sentido'])) ? '0'  : $_POST['sentido'];
$turno           =   $_POST['turno'];
$incidente       =   (empty($_POST['incidente'])) ? ''  : $_POST['incidente'] ;

#Bloque 2

$coordinador     =   (empty($_POST['coordinador'])) ? '0'  : $_POST['coordinador'] ;
$operador1       =   (empty($_POST['operador1']))   ? '0'  : $_POST['operador1'] ;
$operador2       =   (empty($_POST['operador2']))   ? '0'  : $_POST['operador2'] ;
$ti              =   (empty($_POST['ti']))          ? '0'  : $_POST['ti'] ;
$epi             =   (empty($_POST['epi']))         ? '0'  : $_POST['epi'] ;
$seguridad       =   (empty($_POST['seguridad']))   ? '0'  : $_POST['seguridad'] ;
$movil           =   (empty($_POST['movil']))       ? '0'  : $_POST['movil'] ;



//si existen incidentes en la fecha correspondientes
$existe =  count(Operacion_validacion::consulta($fecha));

if ($existe>0)
{

//turno 02
$turno_02 = count(Operacion_validacion::turno($fecha,'CODTUR002'));


if($turno=='CODTUR003')
{

if ($turno_02==0)
{

Message::sweetalert("Notificación","warning","Solo se permite registro del turno tarde",3);


} 
else 
{


 //registro turno mañana
$objeto  =  new Operacion($codigo,$fecha,$sentido,$turno,$incidente,$coordinador,$operador1,$operador2,$ti,$epi,$seguridad,$movil);

$data  =  $objeto->agregar();

if($data=='ok')
{
Correlativo::actualizar('REGINC');
Message::sweetalert("Buen Trabajo","success","Registro Agregado",2);
}
else
{
Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}	





}

}
else
{
	

 //registro turno mañana
$objeto  =  new Operacion($codigo,$fecha,$sentido,$turno,$incidente,$coordinador,$operador1,$operador2,$ti,$epi,$seguridad,$movil);

$data  =  $objeto->agregar();

if($data=='ok')
{
Correlativo::actualizar('REGINC');
Message::sweetalert("Buen Trabajo","success","Registro Agregado",2);
}
else
{
Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}	


}


}
else
{

if ($turno=='CODTUR001') 
{

 //registro turno mañana
$objeto  =  new Operacion($codigo,$fecha,$sentido,$turno,$incidente,$coordinador,$operador1,$operador2,$ti,$epi,$seguridad,$movil);

$data  =  $objeto->agregar();

if($data=='ok')
{
Correlativo::actualizar('REGINC');
Message::sweetalert("Buen Trabajo","success","Registro Agregado",2);
}
else
{
Message::sweetalert("Error","error","Consulte al área de Soporte",2);
}	




}
else
{


Message::sweetalert("Notificación","warning","Solo se permite registro del turno mañana",3);


}








}








?>