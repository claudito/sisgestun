<?php 

class Aforo
{

protected $fecha;
protected $turno;
protected $sentido;
protected $total_liviano;
protected $total_pesado;
protected $velocidad;
protected $userCreate;
protected $dateCreate;
protected $userUpdate;
protected $dataUpdate;

function __construct($fecha='',$turno='',$sentido='',$total_liviano='',$total_pesado='',$velocidad='')
{

$this->fecha         =  $fecha;
$this->turno         =  $turno;
$this->sentido       =  $sentido;
$this->total_liviano =  $total_liviano;
$this->total_pesado  =  $total_pesado;
$this->velocidad     =  $velocidad;
$this->userCreate    =  $_SESSION[KEY.USUARIO];
$this->dateCreate    =  date('Y-m-d H:i:s');
$this->userUpdate    =  $_SESSION[KEY.USUARIO];
$this->dataUpdate    =  date('Y-m-d H:i:s');


}

public function agregar()
{
   try {
    $conexion  = Conexion::get_conexion();
    $query     = "SELECT * FROM aforo WHERE fecha=:fecha AND codigo_turno=:turno AND codigo_sentido=:sentido";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':fecha',$this->fecha);
    $statement->bindParam(':turno',$this->turno);
    $statement->bindParam(':sentido',$this->sentido);
    $statement->execute();
    $result   = $statement->fetchAll();
    
    if (count($result) >0)
    {
     return "existe";
    } 
    else 
    {
     $query     = "INSERT INTO aforo(fecha,codigo_turno,codigo_sentido,total_liviano,total_pesado,velocidad,userCreate,dateCreate)VALUES(:fecha,:turno,:sentido,:total_liviano,:total_pesado,:velocidad,:userCreate,:dateCreate)";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':fecha',$this->fecha);
    $statement->bindParam(':turno',$this->turno);
    $statement->bindParam(':sentido',$this->sentido);
    $statement->bindParam(':total_liviano',$this->total_liviano);
    $statement->bindParam(':total_pesado',$this->total_pesado);
    $statement->bindParam(':velocidad',$this->velocidad);
    $statement->bindParam(':userCreate',$this->userCreate);
    $statement->bindParam(':dateCreate',$this->dateCreate);

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


public function eliminar($id)
{
   try {
     $conexion  = Conexion::get_conexion();
     $query     = "DELETE FROM  aforo  WHERE id=:id";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':id',$id);
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
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }
}

public function actualizar($id)
{
   try {
    $conexion  = Conexion::get_conexion();
     $query     = "UPDATE  aforo  SET  total_liviano=:total_liviano,total_pesado=:total_pesado,velocidad=:velocidad WHERE  id=:id";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':total_liviano',$this->total_liviano);
    $statement->bindParam(':total_pesado',$this->total_pesado);
    $statement->bindParam(':velocidad',$this->velocidad);
    $statement->bindParam(':id',$id);
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
    catch (Exception $e) 
   {
      echo "ERROR: " . $e->getMessage();
   
   }
}


function lista()
{
   
	try {

	$conexion  = Conexion::get_conexion();
	$query     = "SELECT * FROM aforo ORDER BY fecha,codigo_turno";
	$statement = $conexion->prepare($query); 
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}


}


function lista_pdf($fecha)
{
   
  try {

  $conexion  = Conexion::get_conexion();
  $query     = "SELECT a.fecha,a.codigo_turno,s1.liviano liviano_s1,s1.pesado pesado_s1,s1.velocidad velocidad_s1,
s2.liviano liviano_s2,s2.pesado pesado_s2,s2.velocidad velocidad_s2 from aforo  as a  
LEFT JOIN (
-- callao
SELECT SUM(total_liviano)liviano,sum(total_pesado)pesado,avg(velocidad)velocidad,codigo_turno
 from aforo WHERE fecha=:fecha AND codigo_sentido='CODSEN001'
 GROUP BY codigo_turno
)as s1 ON a.codigo_turno=s1.codigo_turno
LEFT JOIN (
SELECT SUM(total_liviano)liviano,sum(total_pesado)pesado,avg(velocidad)velocidad,codigo_turno
 from aforo WHERE fecha=:fecha AND codigo_sentido='CODSEN002'
 GROUP BY codigo_turno
)as s2 ON a.codigo_turno=s2.codigo_turno
WHERE fecha=:fecha
group BY codigo_turno;";
  $statement = $conexion->prepare($query); 
  $statement->bindParam(':fecha',$fecha);
  $statement->execute();
  $result = $statement->fetchAll();
  return $result;
  } catch (Exception $e) {
  echo "ERROR: " . $e->getMessage();
  }


}







public function consulta($id,$campo)
{
    try {
        
   $conexion  = Conexion::get_conexion();
    $query     = "SELECT * FROM aforo WHERE id=:id";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':id',$id);
    $statement->execute();
    $result   = $statement->fetch();
    return $result[$campo];
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
}






}



 ?>