<?php 

class Personal
{


function __construct()
{

}


function lista()
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM personal ORDER BY nombres";
	$statement = $conexion->prepare($query); 
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}


}


function lista_cargo($cargo)
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM personal WHERE cargo_codigo=:cargo ORDER BY nombres ";
	$statement = $conexion->prepare($query);
	$statement->bindParam(':cargo',$cargo); 
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}

}





}

 ?>