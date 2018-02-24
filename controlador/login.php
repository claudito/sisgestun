<?php 

include('../autoload.php');

$user   =  Funciones::validar_xss($_POST['user']);
$pass   =  Funciones::validar_xss($_POST['pass']);
if (empty($user) AND empty($pass))
{
echo "emptynamepwd";
}
else if (empty($user))
{
echo "emptyname";
}
else if (empty($pass))
{
echo "emptypwd";
}

else
{
$acceso =  new Acceso($user,md5($pass));
echo $acceso ->login();
}





 ?>