<?php 

class Operacion_validacion
{



function consulta($fecha)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT  * FROM operacion  WHERE fecha=:fecha AND flagdelete=0";
$statement = $conexion->prepare($query);
$statement->bindParam(':fecha',$fecha);
$statement->execute();
$result    =  $statement->fetchAll();
return $result;

	
} catch (Exception $e) {
	
echo "Error: ".$e->getMessage();

}

}

function turno($fecha,$turno)
{

try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT  * FROM operacion  WHERE fecha=:fecha AND turno_codigo=:turno AND flagdelete=0";
$statement = $conexion->prepare($query);
$statement->bindParam(':fecha',$fecha);
$statement->bindParam(':turno',$turno);
$statement->execute();
$result    =  $statement->fetchAll();
return $result;

} catch (Exception $e) {
	
echo "Error: ".$e->getMessage();

}

}





}





 ?>