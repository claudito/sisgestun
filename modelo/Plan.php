<?php 

class Plan{


function __construct()
{

}


function lista($codigo)
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM plan WHERE tipo_equipos_codigo=:codigo ORDER by nombre";
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