<?php 

class Acceso
{


protected $user;
protected $pass;


function __construct($user='',$pass='')
{
	$this->user = $user;
	$this->pass = $pass;
}


public function login()
{
   try {
    $conexion  = Conexion::get_conexion();
    $query     = "SELECT * FROM usuarios WHERE usuario=:user AND clave=:pass";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':user',$this->user);
    $statement->bindParam(':pass',$this->pass);
    $statement->execute();
    $result   = $statement->fetchall();
    
    if (count($result) >0)
    {
    
     session_start();
     $statement->execute();
     $dato   = $statement->fetch();
     $_SESSION[KEY.CODIGO]    = $dato['codigo'];
     $_SESSION[KEY.USUARIO]   = $dato['usuario'];
     $_SESSION[KEY.NOMBRES]   = $dato['nombres'];
     $_SESSION[KEY.APELLIDOS] = $dato['apellidos'];
     return "ok";
    } 
    else 
    {
      return "error";
    }
       
   }
    catch (Exception $e) 
   {
      return  "ERROR: " . $e->getMessage();
   
   }
}




function  logout()
{

  try {

  if (!isset($_SESSION[KEY.CODIGO])) 
  {
     header('Location: '.URL.'');
  }
  else
  { 

     unset($_SESSION[KEY.CODIGO]);        
     unset($_SESSION[KEY.USUARIO]);
     unset($_SESSION[KEY.NOMBRES]); 
     unset($_SESSION[KEY.APELLIDOS]); 
     header('Location: '.URL.''); 
  }
 
  } catch (Exception $e) {

    echo   "ERROR: " . $e->getMessage();
    
  }
   
}




}




 ?>