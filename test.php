<?php

function Insertar2()
{
	try {
		//prepare analiza el codgio
		// fetchAll lo convierte en una ray de datos
		$conexion  = Conexion::get_conexion();
		$query     = "SELECT * FROM usuario WHERE dni=:dni";
		$Statement = $conexion->prepare($query);
		$Statement->bindParam(':dni',$dni);
		$Statement->execute();
		$result = $Statement->fetchAll();
		return count($result);


	} catch (Exception $e) {
		echo "Error: ".$e->getMessage();;
	}
}


?>