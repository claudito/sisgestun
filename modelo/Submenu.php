<?php 

class Submenu
{


protected $descripcion;
protected $ruta;
protected $item;
protected $menu;


function __construct($descripcion='',$ruta='',$item='',$menu='')
{
  $this->descripcion =  $descripcion;
  $this->ruta        =  $ruta;
  $this->item        =  $item;
  $this->menu        =  $menu;
}

public function agregar()
{
   try {
    $conexion  = Conexion::get_conexion();
    $query     = "SELECT * FROM submenu WHERE descripcion=:descripcion";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':descripcion',$this->descripcion);
    $statement->execute();
    $result   = $statement->fetchAll();
    
    if (count($result) >0)
    {
     return "existe";
    } 
    else 
    {
     $query     = "INSERT INTO submenu(descripcion,ruta,item,menu_id)VALUES(:descripcion,:ruta,:item,:menu)";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':descripcion',$this->descripcion);
    $statement->bindParam(':ruta',$this->ruta);
    $statement->bindParam(':item',$this->item);
    $statement->bindParam(':menu',$this->menu);
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
     $query     = "DELETE FROM  submenu  WHERE id=:id";
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
     $query     = "UPDATE  submenu  SET  descripcion=:descripcion,ruta=:ruta,item=:item,menu_id=:menu WHERE  id=:id";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':descripcion',$this->descripcion);
    $statement->bindParam(':item',$this->item);
    $statement->bindParam(':ruta',$this->ruta);
    $statement->bindParam(':menu',$this->menu);
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
	$query     = "
SELECT sm.id,sm.item,sm.descripcion,m.descripcion AS  menu,sm.ruta
FROM submenu AS sm INNER JOIN menu as m  ON sm.menu_id=m.id ORDER BY m.descripcion;";
	$statement = $conexion->prepare($query); 
	$statement->execute();
	$result = $statement->fetchAll();
	return $result;
	} catch (Exception $e) {
	echo "ERROR: " . $e->getMessage();
	}


}

function lista_nav($menu='')
{
   
  try {

  $conexion  = Conexion::get_conexion();
  $query     = "SELECT * FROM submenu WHERE menu_id='".$menu."' ORDER BY item";
  $statement = $conexion->prepare($query); 
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
    $query     = "SELECT sm.id,sm.item,sm.descripcion,m.id AS idmenu,m.descripcion AS  menu,sm.ruta
    FROM submenu AS sm INNER JOIN menu as m  ON sm.menu_id=m.id  WHERE sm.id=:id ORDER BY m.descripcion";
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