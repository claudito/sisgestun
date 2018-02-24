<?php 

class Vehiculo
{


function __construct()
{

}


function lista()
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM  vehiculo ORDER BY placa";
	$statement = $conexion->prepare($query); 
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}

}



}

 ?>