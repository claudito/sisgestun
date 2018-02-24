<?php 

class Operacion
{

protected $codigo;
protected $fecha;
protected $sentido;
protected $turno;
protected $incidente;
protected $coordinador;
protected $operador1;
protected $operador2;
protected $ti;
protected $epi;
protected $seguridad;
protected $movil;
protected $userCreate;
protected $dateCreate;
protected $userUpdate;
protected $dataUpdate;



function __construct($codigo='',$fecha='',$sentido='',$turno='',$incidente='',$coordinador='',$operador1='',$operador2='',$ti='',$epi='',$seguridad='',$movil='')
{
 
 $this->codigo        =  $codigo;
 $this->fecha         =  $fecha;
 $this->sentido       =  $sentido;
 $this->turno         =  $turno;
 $this->incidente     =  $incidente;
 $this->coordinador   =  $coordinador;
 $this->operador1     =  $operador1;
 $this->operador2     =  $operador2;
 $this->ti            =  $ti;
 $this->epi           =  $epi;
 $this->seguridad     =  $seguridad;
 $this->movil         =  $movil;
 $this->userCreate    =  $_SESSION[KEY.USUARIO];
 $this->dateCreate    =  date('Y-m-d H:i:s');
 $this->userUpdate    =  $_SESSION[KEY.USUARIO];
 $this->dataUpdate    =  date('Y-m-d H:i:s');


}



function agregar()
{

try {
	
$conexion =  Conexion::get_conexion();
$query = "INSERT INTO operacion(codigo,fecha,sentido_codigo,turno_codigo,incidente_codigo,coordinador,operador1,operador2,ti,epi,seguridad,movil,fregistro,usercreate)VALUES(:codigo,:fecha,:sentido,:turno,:incidente,:coordinador,:operador1,:operador2,:ti,:epi,:seguridad,:movil,:dateCreate,:userCreate)";
$statement  = $conexion->prepare($query);
$statement->bindParam(':codigo',$this->codigo);
$statement->bindParam(':fecha',$this->fecha);
$statement->bindParam(':sentido',$this->sentido);
$statement->bindParam(':turno',$this->turno);
$statement->bindParam(':incidente',$this->incidente);
$statement->bindParam(':coordinador',$this->coordinador);
$statement->bindParam(':operador1',$this->operador1);
$statement->bindParam(':operador2',$this->operador2);
$statement->bindParam(':ti',$this->ti);
$statement->bindParam(':epi',$this->epi);
$statement->bindParam(':seguridad',$this->seguridad);
$statement->bindParam(':movil',$this->movil);
$statement->bindParam(':userCreate',$this->userCreate);
$statement->bindParam(':dateCreate',$this->dateCreate);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
 echo "Error:".$e->getMessage();

}




}




function lista()
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT o.id,o.codigo,o.fecha,s.nombre sentido,t.nombre turno,i.valor valor_incidente,i.descripcion descripcion_incidente,
CONCAT(co.nombres,' ',co.apepat,' ',co.apemat)coordinador,
CONCAT(op1.nombres,' ',op1.apepat,' ',op1.apemat)operador1,
CONCAT(op2.nombres,' ',op2.apepat,' ',op2.apemat)operador2,
CONCAT(ti.nombres,' ',ti.apepat,' ',ti.apemat)ti,
CONCAT(epi.nombres,' ',epi.apepat,' ',epi.apemat)epi,
CONCAT(seguridad.nombres,' ',seguridad.apepat,' ',seguridad.apemat)seguridad,
CONCAT(movil.placa)movil
FROM operacion as o  
LEFT JOIN sentido as s ON o.sentido_codigo=s.codigo
LEFT JOIN turno as t ON o.turno_codigo=t.codigo
LEFT JOIN incidente as i ON o.incidente_codigo=i.codigo
LEFT JOIN personal as co ON o.coordinador=co.codigo
LEFT JOIN personal as op1 ON o.operador1=op1.codigo
LEFT JOIN personal as op2 ON o.operador2=op2.codigo
LEFT JOIN personal as ti ON o.ti=ti.codigo
LEFT JOIN personal as epi ON o.epi=epi.codigo
LEFT JOIN personal as seguridad ON o.seguridad=seguridad.codigo
LEFT JOIN vehiculo as movil ON o.movil=movil.codigo where o.flagdelete=0";
	$statement = $conexion->prepare($query); 
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}


}




function consulta($codigo,$campo)
{
   	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT o.codigo,o.fecha,o.sentido_codigo,s.nombre sentido,turno_codigo,t.nombre turno,o.incidente_codigo,i.valor valor_incidente,i.descripcion descripcion_incidente,o.coordinador codigo_coordinador,o.observaciones,
CONCAT(co.nombres,' ',co.apepat,' ',co.apemat)coordinador,
o.operador1 codigo_operador1,
CONCAT(op1.nombres,' ',op1.apepat,' ',op1.apemat)operador1,
o.operador2 codigo_operador2,
CONCAT(op2.nombres,' ',op2.apepat,' ',op2.apemat)operador2,o.ti codigo_ti,
CONCAT(ti.nombres,' ',ti.apepat,' ',ti.apemat)ti,o.epi codigo_epi,
CONCAT(epi.nombres,' ',epi.apepat,' ',epi.apemat)epi,o.seguridad codigo_seguridad,
CONCAT(seguridad.nombres,' ',seguridad.apepat,' ',seguridad.apemat)seguridad,
CONCAT(movil.placa)movil, movil codigo_movil
FROM operacion as o  
LEFT JOIN sentido as s ON o.sentido_codigo=s.codigo
LEFT JOIN turno as t ON o.turno_codigo=t.codigo
LEFT JOIN incidente as i ON o.incidente_codigo=i.codigo
LEFT JOIN personal as co ON o.coordinador=co.codigo
LEFT JOIN personal as op1 ON o.operador1=op1.codigo
LEFT JOIN personal as op2 ON o.operador2=op2.codigo
LEFT JOIN personal as ti ON o.ti=ti.codigo
LEFT JOIN personal as epi ON o.epi=epi.codigo
LEFT JOIN personal as seguridad ON o.seguridad=seguridad.codigo
LEFT JOIN vehiculo as movil ON o.movil=movil.codigo WHERE o.codigo=:codigo AND o.flagdelete=0" ;
	$statement = $conexion->prepare($query); 
	$statement->bindParam(':codigo',$codigo);
	$statement->execute();
	$result = $statement->fetch();
	return $result[$campo];
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}


}


function actualizar()
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE operacion SET fecha=:fecha,sentido_codigo=:sentido,turno_codigo=:turno,incidente_codigo=:incidente,coordinador=:coordinador,operador1=:operador1,operador2=:operador2,ti=:ti,epi=:epi,seguridad=:seguridad,movil=:movil WHERE codigo=:codigo AND flagdelete=0";
$statement = $conexion->prepare($query);
$statement->bindParam(':codigo',$this->codigo);
$statement->bindParam(':fecha',$this->fecha);
$statement->bindParam(':sentido',$this->sentido);
$statement->bindParam(':turno',$this->turno);
$statement->bindParam(':incidente',$this->incidente);
$statement->bindParam(':coordinador',$this->coordinador);
$statement->bindParam(':operador1',$this->operador1);
$statement->bindParam(':operador2',$this->operador2);
$statement->bindParam(':ti',$this->ti);
$statement->bindParam(':epi',$this->epi);
$statement->bindParam(':seguridad',$this->seguridad);
$statement->bindParam(':movil',$this->movil);
$statement->execute();
return "ok";


	
	
} catch (Exception $e) {

echo "Errro: ".$e->getMessage();
	
}

}



function actualizar_campo($id,$campo,$text)
{

try {
	
$conexion  = Conexion::get_conexion();
$query     =  "UPDATE operacion SET ".$campo."=:text WHERE codigo=:id AND flagdelete=0";
$statement = $conexion->prepare($query);
$statement->bindParam(':text',$text);
$statement->bindParam(':id',$id);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
echo "ERROR: " . $e->getMessage();

}

}



function eliminar($codigo)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE   operacion SET flagdelete=1 WHERE codigo=:codigo";
$statement = $conexion->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
echo "ERROR: " . $e->getMessage();

}

}



function eliminar_archivo($codigo)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE   operacion_archivo SET flagdelete=1 WHERE codigo_operacion=:codigo";
$statement = $conexion->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
echo "ERROR: " . $e->getMessage();

}


}


function eliminar_detalle($codigo)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE   operacion_detalle SET flagdelete=1 WHERE codigo_operacion=:codigo";
$statement = $conexion->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
echo "ERROR: " . $e->getMessage();

}


}




	
}

 ?>