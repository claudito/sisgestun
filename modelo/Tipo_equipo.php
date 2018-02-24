<?php 

class Tipo_equipo
{


function __construct()
{

}


function lista($codigo)
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM tipo_equipos WHERE sistemas_codigo=:codigo";
	$statement = $conexion->prepare($query);
	$statement->bindParam(':codigo',$codigo);
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}

}



}

 ?>