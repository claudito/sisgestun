<?php 

class Operacion_det
{

protected $operacion;
protected $sistema;
protected $tipo_equipo;
protected $equipo;
protected $acciones;
protected $horainicio;
protected $horafin;
protected $fechainicio;
protected $fechafin;


function __construct($operacion='',$sistema='',$tipo_equipo='',$equipo='',$acciones='',$horainicio='',$horafin='',$fechainicio='',$fechafin='')
{

 $this->operacion     = $operacion;
 $this->sistema       = $sistema;
 $this->tipo_equipo   = $tipo_equipo;
 $this->equipo        = $equipo;
 $this->acciones      = $acciones;
 $this->horainicio    = $horainicio;
 $this->horafin       = $horafin;
 $this->fechainicio   = $fechainicio;
 $this->fechafin      = $fechafin;

}


function agregar()
{

try {
	
$conexion  = Conexion::get_conexion();
$query     = "INSERT INTO operacion_detalle(codigo_operacion,sistema_codigo,tipo_equipo_codigo,equipo_codigo,acciones_codigo,hora_inicio,fecha_inicio,hora_fin,fecha_fin)VALUES(:operacion,:sistema,:tipo_equipo,:equipo,:acciones,:horainicio,:fechainicio,:horainicio,:fechafin)";
$statement = $conexion->prepare($query);
$statement->bindParam(':operacion',$this->operacion);
$statement->bindParam(':sistema',$this->sistema);
$statement->bindParam(':tipo_equipo',$this->tipo_equipo);
$statement->bindParam(':equipo',$this->equipo);
$statement->bindParam(':acciones',$this->acciones);
$statement->bindParam(':horainicio',$this->horainicio);
$statement->bindParam(':horafin',$this->horafin);
$statement->bindParam(':fechainicio',$this->fechainicio);
$statement->bindParam(':fechafin',$this->fechafin);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}



}


function eliminar($id)
{

try {
	
$conexion  = Conexion::get_conexion();
$query     = "DELETE FROM operacion_detalle WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}

}


function actualizar($id)
{

try {
	
$conexion  = Conexion::get_conexion();
$query     = "UPDATE  operacion_detalle SET hora_inicio=:horainicio,fecha_inicio=:fechainicio,hora_fin=:horafin,fecha_fin=:fechafin WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
$statement->bindParam(':horainicio',$this->horainicio);
$statement->bindParam(':horafin',$this->horafin);
$statement->bindParam(':fechainicio',$this->fechainicio);
$statement->bindParam(':fechafin',$this->fechafin);
$statement->execute();
return "ok";

} catch (Exception $e) {
	
	echo "Error: ".$e->getMessage();
}

}





function lista($operacion)
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT o.id,o.codigo_operacion,o.sistema_codigo,s.nombre sistema,o.tipo_equipo_codigo,te.nombre tipo_equipo,
o.equipo_codigo,e.nombre equipo,o.acciones_codigo,a.nombre acciones,a.descripcion acciones_descripcion,
o.hora_inicio,o.fecha_inicio,o.hora_fin,o.fecha_fin FROM operacion_detalle as o
INNER JOIN sistemas as s ON o.sistema_codigo=s.codigo
INNER JOIN tipo_equipos as te ON o.tipo_equipo_codigo=te.codigo
INNER JOIN equipos as e ON o.equipo_codigo=e.codigo
INNER JOIN acciones as a ON o.acciones_codigo=a.codigo
WHERE codigo_operacion=:operacion  AND o.flagdelete=0 ORDER BY o.fecha_inicio";
	$statement = $conexion->prepare($query);
	$statement->bindParam(':operacion',$operacion);
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}

}


function consulta($id,$campo)
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT o.id,o.codigo_operacion,o.sistema_codigo,s.nombre sistema,o.tipo_equipo_codigo,te.nombre tipo_equipo,
o.equipo_codigo,e.nombre equipo,o.acciones_codigo,a.nombre acciones,a.descripcion acciones_descripcion,
o.hora_inicio,o.fecha_inicio,o.hora_fin,o.fecha_fin FROM operacion_detalle as o
INNER JOIN sistemas as s ON o.sistema_codigo=s.codigo
INNER JOIN tipo_equipos as te ON o.tipo_equipo_codigo=te.codigo
INNER JOIN equipos as e ON o.equipo_codigo=e.codigo
INNER JOIN acciones as a ON o.acciones_codigo=a.codigo
WHERE o.id=:id AND o.flagdelete=0";
	$statement = $conexion->prepare($query);
	$statement->bindParam(':id',$id);
	$statement->execute();
	$result = $statement->fetch();
	return $result[$campo];
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}

}






	
}




 ?>