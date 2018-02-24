<?php 

class Correlativo
{

function __construct()
{

}


function consulta($codigo)
{
try {

$conexion  = Conexion::get_conexion();
$query     = "SELECT * FROM correlativo WHERE codigo=:codigo";
$statement = $conexion->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->execute();
$result = $statement->fetch();
return $result['numero'];

} catch (Exception $e) {

echo "Error: ".$e->getMessage();

}

}




function actualizar($codigo)
{
try {

$conexion  = Conexion::get_conexion();
$query     = "UPDATE correlativo SET numero=numero+1  WHERE codigo=:codigo";
$statement = $conexion->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->execute();
return "ok";
	
} catch (Exception $e) {

echo "Error: ".$e->getMessage();

}

}




}




 ?>