<?php 

class Operacion_archivo
{

protected $operacion;
protected $nombre;
protected $ruta;
protected $tipo;
protected $size;

function __construct($operacion='',$nombre='',$ruta='',$tipo='',$size='')
{

$this->operacion =  $operacion;
$this->nombre    =  $nombre;
$this->ruta      =  $ruta;
$this->tipo      =  $tipo;
$this->size      =  $size;
}


function agregar()
{

try {
	
$conexion  = Conexion::get_conexion();
$query     = "INSERT INTO operacion_archivo(codigo_operacion,nombre,ruta,tipo,size)VALUES(:operacion,:nombre,:ruta,:tipo,:size)";
$statement = $conexion->prepare($query);
$statement->bindParam(':operacion',$this->operacion);
$statement->bindParam(':nombre',$this->nombre);
$statement->bindParam(':ruta',$this->ruta);
$statement->bindParam(':tipo',$this->tipo);
$statement->bindParam(':size',$this->size);
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
$query     = "DELETE FROM  operacion_archivo WHERE id=:id";
$statement = $conexion->prepare($query);
$statement->bindParam(':id',$id);
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
	$query     = "SELECT * FROM operacion_archivo WHERE codigo_operacion=:operacion AND flagdelete=0";
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
	$query     = "SELECT * FROM operacion_archivo WHERE id=:id  AND flagdelete=0";
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