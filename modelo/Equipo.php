<?php 

class Equipo{


function __construct()
{

}


function lista($codigo)
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM equipos WHERE tipo_equipos_codigo=:codigo";
	$statement = $conexion->prepare($query);
	$statement->bindParam(':codigo',$codigo);
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}

}


function lista2($codigo,$sentido)
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT  * FROM equipos WHERE tipo_equipos_codigo=:codigo and zona_codigo in (
SELECT codigo FROM zona WHERE sentido_codigo=:sentido)";
	$statement = $conexion->prepare($query);
	$statement->bindParam(':codigo',$codigo);
	$statement->bindParam(':sentido',$sentido);
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}

}



}

 ?>