<?php 

class Sistema
{


function __construct()
{

}


function lista()
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM  sistemas";
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