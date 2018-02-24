<?php 

include'../../autoload.php';
include'../../session.php';

$submenu  =  new Submenu();
$message  =  new Message();

if (isset($_POST['usuario'])) 
{
	
 $usuario  = $_POST['usuario'];

foreach ($submenu->lista() as $key => $value) 
{ 	
    $permiso_submenu   =  new Permiso_submenu($value['id'],$usuario);

     $estado = ($_POST[$value['id']]=='on') ? 1 : 0 ;

     $permiso_submenu  =  new Permiso_submenu($value['id'],$usuario,$estado);
     $valor         =  $permiso_submenu->actualizar();

	if ($valor=='ok') 
	{
	echo $message->mensaje('Permisos Actualizados','success','...',2);
	} 
	else
	{
	echo $message->mensaje('Error de registro','error','Intentar de Nuevo',2);
	}

} 

} 
else 
{
	echo $message->mensaje('Usuario Desconocido','error','Intentar de Nuevo',2);
}



 ?>