<?php 

class Usuario
{


protected $codigo;
protected $usuario;
protected $clave;
protected $dateCreate;
protected $userCreate;
protected $dateUpdate;
protected $userUpdate;

function __construct($codigo='',$usuario='',$clave='')
{
  $this->codigo           =  $codigo;
  $this->usuario          =  $usuario;
  $this->clave            =  $clave;
  $this->dateCreate       =  date('Y-m-d');
  $this->userCreate       =  $_SESSION[KEY.USUARIO];
  $this->dateUpdate       =  date('Y-m-d');
  $this->userUpdate       =  $_SESSION[KEY.USUARIO];

}


public function agregar()
{
   try {
    
    $conexion  = Conexion::get_conexion();
    $query     = "SELECT * FROM usuarios WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$this->codigo);
    $statement->execute();
    $result   = $statement->fetchAll();
    
    if (count($result) >0)
    {
     return "existe";
    } 
    else 
    {
     $query     = "INSERT INTO usuarios(codigo,usuario,clase,fregistro,usercreate,frupdate,userupdate)VALUES(:codigo,:usuario,:clave,:dateCreate,:userCreate,:dateUpdate,userUpdate)";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$this->codigo);
    $statement->bindParam(':usuario',$this->usuario);
    $statement->bindParam(':clase',$this->clase);
    $statement->bindParam(':dateCreate',$this->dateCreate);
    $statement->bindParam(':userCreate',$this->userCreate);
    $statement->bindParam(':dateUpdate',$this->dateUpdate);
    $statement->bindParam(':userUpdate',$this->userUpdate);
    if(!$statement)
    {
    return "error";
    }
    else
    {
    $statement->execute();
    return "ok";
    }
    }
       
   }
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }
}




function lista()
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM usuarios ORDER BY usuario";
	$statement = $conexion->prepare($query); 
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}


}




public function consulta($codigo,$campo)
{
    try {
        
    $conexion  = Conexion::get_conexion();
    $query     = "SELECT * FROM usuarios WHERE codigo=:codigo";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':codigo',$codigo);
    $statement->execute();
    $result   = $statement->fetch();
    return $result[$campo];
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
}

}



 ?>