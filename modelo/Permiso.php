<?php 

class Permiso
{

protected $submenu;
protected $usuario;
protected $estado;


function __construct($submenu='',$usuario='',$estado='')
{
   $this->submenu  = $submenu;
   $this->usuario  = $usuario;
   $this->estado   = $estado;
   
}







public function permiso_nav($campo)
{
   
  try {
        
  
    $conexion  = Conexion::get_conexion();
    $query     = "SELECT  * FROM permiso_submenu WHERE submenu_id=:submenu AND usuarios_codigo=:usuario";
    $statement = $conexion->prepare($query);
    $statement->bindParam(':submenu',$this->submenu);
    $statement->bindParam(':usuario',$this->usuario);
    $statement->execute();
    $result   = $statement->fetch();
    return $result[$campo];
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }

}




}




 ?>